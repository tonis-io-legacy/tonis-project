<?php

require __DIR__ . '/../vendor/autoload.php';

$app = new Tonis\App;

// Adds the X-Response-Time (configurable) header to all Responses.
$app->pipe(new Tonis\ResponseTime\Middleware);

// Caches responses and then exits the stack early if cache matches.
$app->pipe(new Tonis\ResponseCache\Middleware);

// Article handler - similar to modules, bundles, or packages of other frameworks.
$app->pipe('/articles', new Article\Middleware);

// If nothing matched at this point it must be a 404. You can add your own handler
// but Tonis also includes not found handler by default.

// Here you want to register your error handler. You can add your own handler
// but Tonis also includes an error handler by default.
$app->pipe(new Tonis\ErrorHandler\Middleware());

$server = Zend\Diactoros\Server::createServer($app, $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES);
$server->listen();
