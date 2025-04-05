<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', ['Home', 'index']);

$routes->group('customers', function ($routes) {
    $routes->get('/', 'CustomersController::index');
    $routes->get('getTooltip/(:num)', 'CustomersController::getTooltip/$1');
    $routes->post('store', 'CustomersController::store');
    $routes->get('view/(:num)', 'CustomersController::view/$1');
    $routes->get('edit/(:num)', 'CustomersController::edit/$1');
    $routes->post('update', 'CustomersController::update');
    $routes->post('delete/(:num)', 'CustomersController::delete/$1');
});
