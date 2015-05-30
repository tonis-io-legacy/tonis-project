<?php
use ExamplePackage\ExampleAction;
use ExamplePackage\ExampleActionFactory;
use Tonis\Router\RouteCollection;

return function(RouteCollection $routes) {
    // route with an action class
    $routes->get('/action-default', ExampleAction::class);

    // route built through a factory
    $routes->get('/action-factory', ExampleActionFactory::class);

    // route through di container
    $routes->get('/action-di', 'example-action');

    // micro-style route
    $routes->get('/{name}', function($name) {
        return sprintf('micro-style routing with parameter $name = %s', $name);
    });
};
