<?php
require __DIR__ . '/../vendor/autoload.php';

$tonis = new Tonis\Mvc\Tonis([
    'environment' => [
        'TONIS_DEBUG' => true
    ]
]);
$routes = $tonis->getRouteCollection();

$routes->get('/', function() {
    return 'Welcome to the homepage';
});

$routes->get('/{name}', function($name) {
    return sprintf('Welcome to the homepage, %s', $name);
});

$tonis->run();
