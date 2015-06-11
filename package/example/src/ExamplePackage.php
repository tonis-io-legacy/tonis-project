<?php
namespace ExamplePackage;

use ExamplePackage\Article\ArticleController;
use Tonis\Tonis\Package\AbstractPackage;
use Tonis\Router\RouteCollection;

// Packages should extend \Tonis\Tonis\Package\AbstractPackage to make life easier.
// In general you'll just configure your routes and services here.
// Look at AbstractPackage for a full list of features.
class ExamplePackage extends AbstractPackage
{
    /**
     * {@inheritDoc}
     */
    public function configureRoutes(RouteCollection $routes)
    {
        // micro-framework style routing
        $routes->get('/', function () {
            return 'Welcome to Tonis';
        });

        // routing with a dispatchable
        $routes->get('/articles', [ArticleController::class, 'index']);
    }
}
