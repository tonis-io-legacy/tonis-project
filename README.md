Tonis
=====

Tonis is a PSR-7 micro-framework that can also be used as MVC middleware. Tonis was built for flexibility and performance
while still having the modularity of larger frameworks. Tonis features an event-driven architecture that allows you to 
easily customize the entire life-cycle for micro-services, apis, or even full on sites.

Tonis is built with best practices in mind and features 100% unit test coverage, integration tests, and high quality code.
No pull request will ever be merged that violates any of these standards.

Quick Start
-----------

```sh
composer require tonis/mvc
```

```php
require __DIR__ . '/vendor/autoload.php';

$tonis = (new \Tonis\Mvc\Factory\TonisFactory)->createWeb();
$routes = $tonis->routes();

$routes->get('/hello/{name}', function ($name) {
    return 'Hello ' . $name;
});

echo $tonis->run()->getBody();
```

Documentation
-------------

Full documentation can be found on the [Tonis GitHub page](http://tonis-io.github.io/tonis/) or in the `docs/` 
subdirectory.
