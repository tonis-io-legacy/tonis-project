<?php
namespace Article;

use League\Plates\Engine;
use Tonis\App;
use Tonis\Middleware\AbstractMiddleware;
use Tonis\View\PlatesStrategy;

// Sample reusable Middleware extending Tonis\Middleware\AbstractMiddleware
class Middleware extends AbstractMiddleware
{
    /**
     * Configure the middleware here. Access to the App is available. If you have routing you should
     * use $app->router() to get a router instance and then return it so that the AbstractMiddleware
     * can add it to the pipeline.
     *
     * @param App $app
     * @return \Tonis\Router
     */
    public function configure(App $app)
    {
        // Add a view strategy. This could be a TwigStrategy, BladesStrategy, etc. By default, only Plates is supported.
        $view = $app->getViewManager();
        $view->addStrategy('article', new PlatesStrategy(new Engine(__DIR__ . '/../view')));

        $container = $app->getServiceContainer();

        // Create a router from the application.
        $router = $app->router();

        // If you want to use single-purpose actions.
        $router->get('/', $container->get(IndexAction::class));

        // Any route with article_id as a parameter will trigger this handler.
        // It sets the article parameter on the $request using ArrayAccess so that you don't have to duplicate logic.
        $router->param('article_id', $container->get(ArticleIdHandler::class));

        // If you want to use traditional controllers. The request will contain an `article` parameter as specified
        // by the article_id param handler above. If the article is not found this middleware is never even called.
        $router->get('/{article_id}', [$container->get(Controller::class), 'view']);

        return $router;
    }
}
