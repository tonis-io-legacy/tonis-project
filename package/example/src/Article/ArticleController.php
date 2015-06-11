<?php
namespace ExamplePackage\Article;

// Controller per typical Frameworks.
// This could be a single purpose action (ArticleIndexAction) as well.
class ArticleController
{
    public function index()
    {
        return [
            // The ViewModel conversion from array needs to know the template name.
            '$$template' => '@example-package/article/index',
            'articles' => [
                [
                    'id' => 1,
                    'title' => 'Foo',
                ],
                [
                    'id' => 2,
                    'title' => 'bar'
                ]
            ]
        ];
    }
}
