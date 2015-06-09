<?php
require __DIR__ . '/../vendor/autoload.php';

$tonis = \Tonis\Mvc\Factory\TonisFactory::fromDefaults([
    'environment' => [
        'TONIS_DEBUG' => true
    ],
    'packages' => [
        \ExamplePackage\Package::class,
        \Tonis\Asset\AssetPackage::class
    ]
]);

$tonis->run();
