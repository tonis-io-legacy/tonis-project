<?php
use Tonis\Web\Factory\TonisFactory;

require __DIR__ . '/../vendor/autoload.php';

$console = (new TonisFactory)->createConsole();
$console->run();
