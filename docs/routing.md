Routing
=======

You define routes by using the `Tonis\Router\RouteCollection` available to Tonis. Additionally, packages may
use the `configureRoutes()` method to define their routes.

Basic Routes
------------

The route collection featuers convenience methods which map directly to HTTP methods. 

```php
$routes->get('/', function () {
    return 'Hey Tonis';
});

$routes->post('/', function () {
    //
});

$routes->patch('/', function () {
    //
});

$routes->put('/', function () {
    //
});

$routes->delete('/', function () {
    //
});
```

Assembling URLs
---------------

In order to assemble a route you must have given it a name.

```php
$routes->get('/', function () {}, 'name');
```

To generate a url from a route you may use the `assemble()` method on the `RouteCollection`.
 
```php
$routes->assemble('name')
```
