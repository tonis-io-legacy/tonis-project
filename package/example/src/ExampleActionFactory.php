<?php
namespace ExamplePackage;

use Tonis\Di\Container;
use Tonis\Di\ServiceFactoryInterface;

class ExampleActionFactory implements ServiceFactoryInterface
{
    /**
     * @param Container $di
     * @return mixed
     */
    public function createService(Container $di)
    {
        return new ExampleAction('factory');
    }
}
