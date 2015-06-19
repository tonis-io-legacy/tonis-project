<?php
namespace Article;

class ArticleRepository
{
    private $articles = [
        1 => ['id' => 1, 'title' => 'Foo Article'],
        2 => ['id' => 2, 'title' => 'Bar Article'],
        3 => ['id' => 3, 'title' => 'Baz Article'],
    ];

    public function find($id)
    {
        return isset($this->articles[$id]) ? $this->articles[$id] : null;
    }

    public function findAll()
    {
        return $this->articles;
    }
}
