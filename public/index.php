<?php
use ExamplePackage\ExamplePackage;
use Tonis\Mvc\Factory\TonisFactory;
use Zend\Diactoros\Server;
use Zend\Stratigility\MiddlewarePipe;

require __DIR__ . '/../vendor/autoload.php';

$config = ['packages' => [ExamplePackage::class]];
$factory = new TonisFactory;

$app = new MiddlewarePipe();
$app->pipe('/api', $factory->createApi($config));
$app->pipe($factory->createWeb($config));

$server = Server::createServer($app, $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES);
$server->listen();
