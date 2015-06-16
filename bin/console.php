<?php
use Tonis\Web\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$console = (new AppFactory())->createConsole();
$console->run();
