<?php
namespace ExamplePackage\Article;

class ArticleService
{
    /**
     * @return array
     */
    public function getArticles()
    {
        return [
            [
                'id' => 1,
                'title' => 'Foo',
            ],
            [
                'id' => 2,
                'title' => 'bar'
            ]
        ];
    }
}
