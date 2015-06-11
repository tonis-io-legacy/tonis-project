<?php
use Tonis\Tonis\Factory\TonisFactory;
use Zend\Diactoros\Server;
use Zend\Stratigility\MiddlewarePipe;

require __DIR__ . '/../vendor/autoload.php';

// Middleware App provided by Stratigility
$app = new MiddlewarePipe();

// Tonis factory to create our Tonis instances
$factory = new TonisFactory;

// Config kept separate to make it easier to maintain
$config = include __DIR__ . '/../config/tonis.php';

// Pipe all /api requests through an API optimized instance of Tonis
$app->pipe('/api', $factory->createApi($config));

// Pipe all other requests through the default Tonis instance
$app->pipe($factory->createWeb($config));

// Part of Zend\Diactoros
$server = Server::createServer($app, $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES);
$server->listen();
