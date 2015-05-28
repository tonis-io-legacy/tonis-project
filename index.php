<?php
require __DIR__ . '/vendor/autoload.php';

$tonis = new Tonis\Mvc\Tonis();

$tonis
    ->getRouteCollection()
    ->get('test', '/test', function() {
        return 'wat wat';
    });

$tonis->run();

echo '<br>';
echo sprintf('Took: %2.4fms', ((microtime(true) - $_SERVER['REQUEST_TIME_FLOAT']) * 1000));
