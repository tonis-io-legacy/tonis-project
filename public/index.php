<?php
require __DIR__ . '/../vendor/autoload.php';

$tonis = new Tonis\Mvc\Tonis([
    'environment' => [
        'TONIS_DEBUG' => true
    ],
    'packages' => [
        'ExamplePackage'
    ]
]);

$tonis->run();
