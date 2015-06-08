<?php
require __DIR__ . '/../vendor/autoload.php';

$tonis = \Tonis\Mvc\Factory\TonisFactory::fromDefaults([
    'environment' => [
        'TONIS_DEBUG' => true
    ]
]);

$routes = $tonis->routes();
$routes->get('/hello/{name}', function ($name) {
    return sprintf('Welcome to the homepage, %s', $name);
});

$tonis->run();
