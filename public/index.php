<?php
use Phly\Conduit\MiddlewarePipe;
use Phly\Http\Server;
use Tonis\Di\Container;
use Tonis\Mvc\App;

chdir(dirname(__DIR__));

require __DIR__ . '/../vendor/autoload.php';

$app = new MiddlewarePipe();
$server = Server::createServer($app, $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES);

$app->pipe('/', new App(new Container, include __DIR__ . '/../config/tonis.config.php'));

$server->listen();
