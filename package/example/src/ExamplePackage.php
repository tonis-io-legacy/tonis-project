<?php
namespace ExamplePackage;

use ExamplePackage\Home\IndexAction;
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
        $routes->get('/{name}', IndexAction::class);
    }

    /**
     * {@inheritDoc}
     */
    public function configureServices(ContainerInterface $di)
    {
        if (!method_exists($di, 'set')) {
            return;
        }
        
        $di->set('example-action', function() {
            return new IndexAction('di');
        });
    }
}
