<?php

// Add a view strategy. This could be a TwigStrategy, BladesStrategy, etc. By default, only Plates is supported.
use Article\ArticleIdHandler;
use Article\Controller;
use Article\IndexAction;
use League\Plates\Engine;
use Tonis\View\PlatesStrategy;

$view = $app->getView();

// Add a PlatesPHP strategy for our template directory.
// If you're building an API you won't need a view strategy.
$view->addStrategy('article', new PlatesStrategy(new Engine(__DIR__ . '/view')));

$container = $app->getContainer();

// Create a router from the application.
$router = $app->router();

// If you want to use single-purpose actions.
$router->get('/', $container->get(IndexAction::class));

// Any route with article_id as a parameter will trigger this handler.
// It sets the article parameter on the $request using ArrayAccess so that you don't have to duplicate logic.
$router->param('article_id', $container->get(ArticleIdHandler::class));

// If you want to use traditional controllers. The request will contain an `article` parameter as specified
// by the article_id param handler above. If the article is not found this middleware is never even called.
$router->get('/{article_id}', [$container->get(Controller::class), 'view']);

return $router;
