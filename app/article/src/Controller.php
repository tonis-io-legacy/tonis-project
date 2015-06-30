<?php
namespace Article;

use Tonis\Http\Request;
use Tonis\Http\Response;

/**
 * Sample controller that you would see in most web MVC frameworks (Zend, Symfony, Laravel, etc.)
 */
class Controller
{
    public function view(Request $request, Response $response)
    {
        return $response->render('view', ['article' => $request['article']]);
    }
}
