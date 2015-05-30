<?php
namespace ExamplePackage;

use Tonis\Mvc\Action\AbstractAction;

class ExampleAction extends AbstractAction
{
    /** @var mixed */
    private $input;

    public function __construct($input = null)
    {
        $this->input = $input;
    }

    public function __invoke()
    {
        if ($this->input) {
            return $this->input;
        }
        return 'default';
    }
}
