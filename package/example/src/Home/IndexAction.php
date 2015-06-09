<?php
namespace ExamplePackage\Home;

use Assetic\Factory\AssetFactory;
use Assetic\Factory\Worker\CacheBustingWorker;

class IndexAction
{
    /** @var mixed */
    private $input;

    public function __construct($input = null)
    {
        $this->input = $input;
    }

    public function __invoke()
    {
        $factory = new AssetFactory(realpath(__DIR__ . '/../../../../'));
        $factory->setDefaultOutput('/public/asset/*');
        $factory->setDebug(true);
        $factory->addWorker(new CacheBustingWorker());

        $css = $factory->createAsset([
            'bower_components/bootstrap/dist/css/bootstrap.css',
        ], [
        ], [
            'name' => 'layout'
        ]);

        return ['css' => $css];
    }
}
