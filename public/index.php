<?php
use ExamplePackage\ExamplePackage;
use Tonis\Mvc\Factory\TonisFactory;
use Zend\Diactoros\Server;

require __DIR__ . '/../vendor/autoload.php';

$config = ['packages' => [ExamplePackage::class]];
$factory = new TonisFactory;

$app = new \Zend\Stratigility\MiddlewarePipe();
$app->pipe('/api', $factory->fromApiDefaults($config));
$app->pipe($factory->fromDefaults($config));

$server = Server::createServer($app, $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES);
$server->listen();
