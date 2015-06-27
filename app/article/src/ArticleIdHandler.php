<?php
namespace Article;

use Tonis\Http\Request;
use Tonis\Http\Response;

class ArticleIdHandler
{
    /** @var Repository */
    private $repository;

    /**
     * @param Repository $repository
     */
    public function __construct(Repository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(Request $request, Response $response, $next)
    {
        $article = $this->repository->find((int) $request['article_id']);

        if (!$article) {
            return $next($request, $response, new \InvalidArgumentException('Article not found', 404));
        }

        $request['article'] = $article;
        return $next($request, $response);
    }
}
