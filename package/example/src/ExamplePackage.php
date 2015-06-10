<?php
namespace ExamplePackage;

use ExamplePackage\Home\IndexController;
use Interop\Container\ContainerInterface;
use Tonis\Mvc\Package\AbstractPackage;
use Tonis\Router\RouteCollection;

class ExamplePackage extends AbstractPackage
{
    /**
     * {@inheritDoc}
     */
    public function configureRoutes(RouteCollection $routes)
    {
        // route with an action class
        $routes->get('/{name}', [IndexController::class, 'testAction']);
    }
}
