<?php
namespace Article;

use Tonis\Http\Request;
use Tonis\Http\Response;

class ArticleController
{
    /** @var ArticleRepository */
    private $repository;

    public function __construct(ArticleRepository $repository)
    {
        $this->repository = $repository;
    }

    public function view(Request $req, Response $res)
    {
        return $res->render('view', ['article' => $this->repository->find($req->getAttribute('id'))]);
    }
}
