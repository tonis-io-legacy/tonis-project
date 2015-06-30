<?php
namespace Article;

use Tonis\Http\Request;
use Tonis\Http\Response;

/**
 * This is a param middleware that looks for `article_id` in the route. If it exists, then this middleware
 * is ran. If no article is available it invokes error middleware using the fourth argument on $next.
 */
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

    /**
     * @param Request $request
     * @param Response $response
     * @param callable $next
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function __invoke(Request $request, Response $response, callable $next)
    {
        $article = $this->repository->find((int) $request['article_id']);

        if (!$article) {
            throw new \InvalidArgumentException('Article not found', 404);
        }

        $request['article'] = $article;
        return $next($request, $response);
    }
}
