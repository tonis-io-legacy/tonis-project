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

Route Parameters
----------------

```php
// required name parameter - matches /hello/tonis
$routes->get('/hello/{name}', ...);

// optional name parameter - matches /hello or /hello/tonis
$routes->get('/hello{/name?}', ...);
```

**It's important to note the "/" inside the "{". If you leave this outside the curl brace it is not optional and will
be required for the route to match!**

```php
// parameter constraints - matches /hello/tonis but not /hello/1234
$routes->get('/hello/{name:\w+}', ...);

// the kitchen sink (id is required as a digit, name is optional and matches a-z and A-Z
// matches /hello/1 or /hello/1-tonis
$routes->get('/hello/{id:\d+}{-name?:[a-zA-Z]+}');
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
