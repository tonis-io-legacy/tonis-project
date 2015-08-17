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

$app = include __DIR__ . '/../app/bootstrap.php';

$server = Zend\Diactoros\Server::createServer($app, $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES);
$server->listen();
