<?php
namespace ExamplePackage\Home;

class IndexAction
{
    public function __invoke($name)
    {
        return ['name' => $name];
    }
}
