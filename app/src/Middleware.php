<?php
namespace Article;

use League\Plates\Engine;
use Tonis\App;
use Tonis\Middleware\AbstractMiddleware;
use Tonis\View\Strategy\PlatesStrategy;

// Sample of basic resuable Middleware extending Tonis\Middleware\AbstractMiddleware which provides some basic features.
class Middleware extends AbstractMiddleware
{
    public function configure(App $app)
    {
        // Add a view strategy. This could be a TwigStrategy, BladesStrategy, etc. By default only Plates is supported.
        $view = $app->getViewManager();
        $view->addStrategy('article', new PlatesStrategy(new Engine(__DIR__ . '/../view')));

        // Do some service container setup here.
        $container = $app->getServiceContainer();
        $container->set(ArticleAction::class, function() {
            return new ArticleAction(new ArticleRepository);
        });
        $container->set(ArticleController::class, function() {
            return new ArticleController(new ArticleRepository);
        });

        // Create a router from the application.
        // Routers are also middleware.
        $router = $app->createRouter();

        // If you want to use single-purpose actions.
        $router->get('/', $container->get(ArticleAction::class));

        // If you want to use traditional controllers.
        $router->get('/{id}', [$container->get(ArticleController::class), 'view']);

        return $router;
    }
}
