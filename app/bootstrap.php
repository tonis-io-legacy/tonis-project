<?php
require __DIR__ . '/../vendor/autoload.php';

$app = new Tonis\App;

// Sample Middleware
// Adds the X-Response-Time (configurable) header to all Responses.
// composer require tonis-io/response-time
$app->add(new Tonis\ResponseTime\ResponseTime);

// Attach the article setup (view the file for more info).
$app->package(new Article\Package);

return $app;