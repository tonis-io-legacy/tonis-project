<?php
namespace Article;

use Tonis\Http\Request;
use Tonis\Http\Response;

class ArticleAction
{
    private $articleRepository;

    public function __construct(ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    public function __invoke(Request $req, Response $res)
    {
        return $res->render('index', ['articles' => $this->articleRepository->findAll()]);
    }
}
