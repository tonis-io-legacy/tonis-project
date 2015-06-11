Tonis
=====

This is a sample project that shows off how Tonis can work with a middleware framework like 
[Stratigility](https://www.github.com/zendframework/zend-stratigility). The same source code is loaded for both the
web and api portions. The former is rendered using PlatesPHP and the later is JSON dumped.

Installation
------------

```sh
git clone git@github.com:tonis-io/tonis-project
cd tonis-project
composer install
cd public/
php -S 127.0.0.1:8080 index.php
```

Usage
-----

http://127.0.0.1:8080 - for the sample micro-framework style route.
http://127.0.0.1:8080/articles - to view the article output using PlatesPHP
http://127.0.0.1:8080/api/articles - to view the article output using JSON

Both article endpoints use 100% identical user-land source code.

Documentation
-------------

Full documentation can be found on the [Tonis GitHub page](http://tonis-io.github.io/tonis/) or in the `docs/` 
subdirectory.
