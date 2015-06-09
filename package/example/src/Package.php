<?php
namespace ExamplePackage;

use ExamplePackage\Home\IndexAction;
use ExamplePackage\Home\IndexActionFactory;
use Interop\Container\ContainerInterface;
use Tonis\Mvc\Package\AbstractPackage;
use Tonis\Router\RouteCollection;

class Package extends AbstractPackage
{
    /**
     * {@inheritDoc}
     */
    public function configureRoutes(RouteCollection $routes)
    {
        // route with an action class
        $routes->get('/action-default', IndexAction::class);

        // route built through a factory
        $routes->get('/action-factory', IndexActionFactory::class);

        // route through di container
        $routes->get('/action-di', 'example-action');

        // micro-style route
        $routes->get('/{name}', function($name) {
            return sprintf('micro-style routing with parameter $name = %s', $name);
        });
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
