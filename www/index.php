<?php

require __DIR__ . '/../vendor/autoload.php';

// Decline static file requests back to the PHP built-in webserver
// You can remove this if you're not using the built in webserver for dev.
if (php_sapi_name() === 'cli-server') {
    $path = realpath(__DIR__ . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    if (__FILE__ !== $path && is_file($path)) {
        return false;
    }
    unset($path);
}

//$app = new Tonis\App;

// use pimple instead of League\Container (optional)
$app = new \Tonis\App;

// Sample Middleware
// Adds the X-Response-Time (configurable) header to all Responses.
// composer require tonis-io/response-time
$app->add(new Tonis\ResponseTime\ResponseTime);

// Attach the article setup (view the file for more info).
$app->add(include __DIR__ . '/../app/article/setup.php');

$server = Zend\Diactoros\Server::createServer($app, $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES);
$server->listen();
