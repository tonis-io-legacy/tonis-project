<?php
namespace ExamplePackage\Article;

// Controller per typical Frameworks.
// This could be a single purpose action (ArticleIndexAction) as well.
class ArticleController
{
    /** @var ArticleService */
    private $articleService;

    public function __construct(ArticleService $articleService)
    {
        $this->articleService = $articleService;
    }

    public function index()
    {
        throw new \RuntimeException('Well shit');
        return [
            // The ViewModel conversion from array needs to know the template name.
            '$$template' => '@example-package/article/index',
            'articles' => $this->articleService->getArticles()
        ];
    }
}
