<?php
namespace Article;

use League\Plates\Engine;
use Tonis\App;
use Tonis\PackageInterface;

class Package implements PackageInterface
{
    /**
     * {@inheritDoc}
     */
    public function register(App $app)
    {
        $container = $app->getContainer();

        /** @var Engine $engine */
        $engine = $container->get(Engine::class);
        $engine->addFolder('article', __DIR__ . '/../view');

        // Create a router from the application.
        $router = $app->router();

        // If you want to use single-purpose actions.
        $router
            ->get('/', $container->get(IndexAction::class))
            ->name('article.list');

        // Any route with article_id as a parameter will trigger this handler.
        // It sets the article parameter on the $request using ArrayAccess so that you don't have to duplicate logic.
        $router->param('article_id', $container->get(ArticleIdHandler::class));

        // If you want to use traditional controllers. The request will contain an `article` parameter as specified
        // by the article_id param handler above. If the article is not found this middleware is never even called.
        $router
            ->get('/{article_id}', [$container->get(Controller::class), 'view'])
            ->name('article.view');

        $app->add($router);
    }
}