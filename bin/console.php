<?php
use Tonis\Mvc\Factory\TonisFactory;

require __DIR__ . '/../vendor/autoload.php';

$console = (new TonisFactory)->createConsole();
$console->run();
