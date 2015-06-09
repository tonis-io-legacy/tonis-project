<?php
namespace ExamplePackage\Home;

use Assetic\Factory\AssetFactory;
use Interop\Container\ContainerInterface;
use Tonis\Di\ServiceFactoryInterface;

class IndexActionFactory implements ServiceFactoryInterface
{
    /**
     * @param ContainerInterface $di
     * @return IndexAction
     */
    public function createService(ContainerInterface $di)
    {
        return new IndexAction($di->get(AssetFactory::class));
    }
}
