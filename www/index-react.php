<?php
/** @var Tonis\App $tonis */
$tonis = include __DIR__ . '/../app/bootstrap.php';
$host  = '127.0.0.1';
$port  = 8080;

$app = function (React\Http\Request $request, React\Http\Response $response) use ($tonis, $host, $port) {
    $static = __DIR__ . $request->getPath();
    if ($static && is_file($static)) {
        $response->writeHead(200);
        $response->end(file_get_contents(__DIR__ . $request->getPath()));
        return;
    }

    $serverRequest = Zend\Diactoros\ServerRequestFactory::fromGlobals();
    $tonisResponse = $tonis->__invoke($serverRequest, new Zend\Diactoros\Response());

    // Output response                                                                                   
    $response->writeHead($tonisResponse->getStatusCode(), $tonisResponse->getHeaders());
    $response->end($tonisResponse->getBody());
};

$loop   = React\EventLoop\Factory::create();
$socket = new React\Socket\Server($loop);
$http   = new React\Http\Server($socket);

$http->on('request', $app);

$socket->listen($port);
$loop->run();                                                                                            