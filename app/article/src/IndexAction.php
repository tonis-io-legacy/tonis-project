<?php
namespace Article;

use Tonis\Http\Request;
use Tonis\Http\Response;

/**
 * Sample of an "Action" with the Action-Domain-Responder.
 * See: https://github.com/pmjones/adr
 */
class IndexAction
{
    private $articleRepository;

    public function __construct(Repository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    public function __invoke(Request $request, Response $response)
    {
        return $response->render('article::index', ['articles' => $this->articleRepository->findAll()]);
    }
}
