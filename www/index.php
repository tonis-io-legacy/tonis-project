<?php

require __DIR__ . '/../vendor/autoload.php';

$app = new Tonis\App;
$app->pipe(new Tonis\ResponseTime\Middleware);
$app->pipe('/articles', new Article\Middleware);

$server = Zend\Diactoros\Server::createServer($app, $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES);
$server->listen();
