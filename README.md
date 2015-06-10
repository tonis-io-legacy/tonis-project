Tonis
=====

Tonis is a PSR-7 micro-framework that can also be used as MVC middleware. Tonis was built for flexibility and performance
while still having the modularity of larger frameworks. Tonis features an event-driven architecture that allows you to 
easily customize the entire life-cycle for micro-services, apis, or even full on sites.

Components
----------

| Component                                            | Build Status                                                                                                                           | Code Coverage                                                                                                                               | Code Quality                                                                                                                                                |
| -----------------------------------------------------| ---------------------------------------------------------------------------------------------------------------------------------------| --------------------------------------------------------------------------------------------------------------------------------------------| ------------------------------------------------------------------------------------------------------------------------------------------------------------|
| [Di](https://github.com/tonis-io/di)                 | [![Build Status](https://scrutinizer-ci.com/g/tonis-io/di/badges/build.png)](https://scrutinizer-ci.com/g/tonis-io/di)                 | [![Code Coverage](https://scrutinizer-ci.com/g/tonis-io/di/badges/coverage.png)](https://scrutinizer-ci.com/g/tonis-io/di/)                 | [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/tonis-io/di/badges/quality-score.png)](https://scrutinizer-ci.com/g/tonis-io/di/)                 |
| [Dispatcher](https://github.com/tonis-io/dispatcher) | [![Build Status](https://scrutinizer-ci.com/g/tonis-io/dispatcher/badges/build.png)](https://scrutinizer-ci.com/g/tonis-io/dispatcher) | [![Code Coverage](https://scrutinizer-ci.com/g/tonis-io/dispatcher/badges/coverage.png)](https://scrutinizer-ci.com/g/tonis-io/dispatcher/) | [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/tonis-io/dispatcher/badges/quality-score.png)](https://scrutinizer-ci.com/g/tonis-io/dispatcher/) |
| [Event](https://github.com/tonis-io/event)           | [![Build Status](https://scrutinizer-ci.com/g/tonis-io/event/badges/build.png)](https://scrutinizer-ci.com/g/tonis-io/event)           | [![Code Coverage](https://scrutinizer-ci.com/g/tonis-io/event/badges/coverage.png)](https://scrutinizer-ci.com/g/tonis-io/event/)           | [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/tonis-io/event/badges/quality-score.png)](https://scrutinizer-ci.com/g/tonis-io/event/)           |
| [Mvc](https://github.com/tonis-io/mvc)               | [![Build Status](https://scrutinizer-ci.com/g/tonis-io/mvc/badges/build.png)](https://scrutinizer-ci.com/g/tonis-io/mvc)               | [![Code Coverage](https://scrutinizer-ci.com/g/tonis-io/mvc/badges/coverage.png)](https://scrutinizer-ci.com/g/tonis-io/mvc/)               | [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/tonis-io/mvc/badges/quality-score.png)](https://scrutinizer-ci.com/g/tonis-io/mvc/)               |
| [Package](https://github.com/tonis-io/package)       | [![Build Status](https://scrutinizer-ci.com/g/tonis-io/package/badges/build.png)](https://scrutinizer-ci.com/g/tonis-io/package)       | [![Code Coverage](https://scrutinizer-ci.com/g/tonis-io/package/badges/coverage.png)](https://scrutinizer-ci.com/g/tonis-io/package/)       | [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/tonis-io/package/badges/quality-score.png)](https://scrutinizer-ci.com/g/tonis-io/package/)       |
| [Router](https://github.com/tonis-io/router)         | [![Build Status](https://scrutinizer-ci.com/g/tonis-io/router/badges/build.png)](https://scrutinizer-ci.com/g/tonis-io/router)         | [![Code Coverage](https://scrutinizer-ci.com/g/tonis-io/router/badges/coverage.png)](https://scrutinizer-ci.com/g/tonis-io/router/)         | [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/tonis-io/router/badges/quality-score.png)](https://scrutinizer-ci.com/g/tonis-io/router/)         |
| [View](https://github.com/tonis-io/view)             | [![Build Status](https://scrutinizer-ci.com/g/tonis-io/view/badges/build.png)](https://scrutinizer-ci.com/g/tonis-io/view)             | [![Code Coverage](https://scrutinizer-ci.com/g/tonis-io/view/badges/coverage.png)](https://scrutinizer-ci.com/g/tonis-io/view/)             | [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/tonis-io/view/badges/quality-score.png)](https://scrutinizer-ci.com/g/tonis-io/view/)             |

Quick Start
-----------

```sh
composer require tonis/mvc
```

```php
<?php
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

Documentation can be found in the `docs/` subdirectory.
