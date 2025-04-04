<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', ['Home', 'index']);

$routes->group('customers', function ($routes) {
    $routes->get('/', 'CustomersController::index');
});
