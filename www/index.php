<?php

require __DIR__ . '/../vendor/autoload.php';

$app = new Tonis\App;

// Sample Middleware
// Adds the X-Response-Time (configurable) header to all Responses.
// composer require tonis-io/response-time
$app->add(new Tonis\ResponseTime\Middleware);

$app->get('/', function ($request, $response) {
    return $response->write('Welcome to Tonis');
});

// Article handler - similar to modules, bundles, or packages of other frameworks.
$app->add('/articles', new Article\Middleware);

// If nothing matched at this point it must be a 404. You can add your own handler
// but Tonis also includes not found handler by default.

// Here you want to register your error handler. Tonis\ErrorHandler includes logging via Mongolog.
// composer require tonis-io/error-handler
//$app->add(new Tonis\ErrorHandler\Middleware());

$server = Zend\Diactoros\Server::createServer($app, $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES);
$server->listen();
