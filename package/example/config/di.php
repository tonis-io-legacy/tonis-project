<?php

use ExamplePackage\ExampleAction;
use Tonis\Di\Container;

return function(Container $di) {
    $di->set('example-action', function() {
        return new ExampleAction('di');
    });
};
