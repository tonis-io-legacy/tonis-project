Tonis
=====

Tonis is a light-weight, PSR-7 compliant, MVC middleware/micro-framework. The name came from 
[Tonis](https://gswiki.play.net/mediawiki/index.php/Tonis) in the world of [Elanthia](https://gswiki.play.net/mediawiki/index.php/Elanthia).
[Tonis](https://gswiki.play.net/mediawiki/index.php/Tonis) is the messenger of the gods and is renowned for his speed.

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

Installation
------------

```sh
composer require tonis-io/mvc
```

Quick Start
-----------

```php
<?php
include 'vendor/autoload.php'

$tonis = \Tonis\Mvc\Factory\TonisFactory::fromDefaults();

$routes = $tonis->routes();
$routes->get('/hello/{name}', function ($name) {
    return sprintf('Welcome to the homepage, %s', $name);    
});

$tonis->run();
```
