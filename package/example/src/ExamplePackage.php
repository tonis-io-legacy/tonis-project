<?php
namespace ExamplePackage;

use ExamplePackage\Article\ArticleController;
use ExamplePackage\Article\ArticleService;
use Interop\Container\ContainerInterface;
use Tonis\Di\Container;
use Tonis\Router\Router;
use Tonis\Web\Package\AbstractPackage;

// Packages should extend \Tonis\Web\Package\AbstractPackage to make things easier.
// In general you'll just configure your routes and services here.
// Look at AbstractPackage for a full list of features.
class ExamplePackage extends AbstractPackage
{
    /**
     * {@inheritDoc}
     */
    public function configureServices(ContainerInterface $services)
    {
        if (!$services instanceof Container) {
            return;
        }
        $services->set(ArticleController::class, function (ContainerInterface $services) {
            return new ArticleController($services->get(ArticleService::class));
        });
        $services->set(ArticleService::class, ArticleService::class);
    }

    /**
     * {@inheritDoc}
     */
    public function configureRoutes(Router $router)
    {
        // micro-framework style routing
        $router->get('/', function () {
            return 'Welcome to Tonis';
        });

        // routing with a dispatchable
        $router->get('/articles', [ArticleController::class, 'index']);
    }
}
