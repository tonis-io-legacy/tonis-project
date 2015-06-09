<?php
use Tonis\Mvc\Factory\TonisFactory;
use Zend\Diactoros\Server;

require __DIR__ . '/../vendor/autoload.php';

$factory = new TonisFactory;
$action = function () {
    return ['foo' => 'bar'];
};

$web = $factory->fromDefaults();
$web->routes()->get('', $action);

$api = $factory->fromApiDefaults();
$api->routes()->get('', $action);

$app = new \Zend\Stratigility\MiddlewarePipe();
$app->pipe('/api', $api);
$app->pipe($web);

$server = Server::createServer($app, $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES);
$server->listen();
