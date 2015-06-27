<?php
namespace Article;

use Tonis\Http\Request;
use Tonis\Http\Response;

class ArticleController
{
    public function view(Request $request, Response $response)
    {
        return $response->render('view', ['article' => $request['article']]);
    }
}