<?php

require __DIR__ . '/../vendor/autoload.php';

$app = new Tonis\App;

// Sample Middleware
// Adds the X-Response-Time (configurable) header to all Responses.
// composer require tonis-io/response-time
$app->add(new Tonis\ResponseTime\ResponseTime);

$app->get('/', function ($request, $response, $next) {
    return $response->write('Welcome to Tonis');
});

// Article handler - similar to modules, bundles, or packages of other frameworks.
$app->add('/articles', include __DIR__ . '/../app/article/setup.php');

// Tonis\ErrorHandler includes logging via Monolog.
// composer require tonis-io/error-handler
$app->add(new Tonis\ErrorHandler\ErrorHandler(new \Monolog\Logger('default')));

// If nothing matched at this point it must be a 404. You can add your own handler
// but Tonis also includes not found handler by default.

$server = Zend\Diactoros\Server::createServer($app, $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES);
$server->listen();
