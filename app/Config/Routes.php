<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/test', 'Home::spiner');
$routes->get('/dashboard', 'Dashboard::index');

// Auth route
$routes->get('/signup', 'Auth::register');
$routes->get('/login', 'Auth::login');

// User group
$routes->group('/users', function($routes) {
    $routes->post('store', 'UserController::store');
    $routes->get('edit/(:num)', 'UserController::edit/$1');
    $routes->post('update/(:num)', 'UserController::update/$1');
});

$routes->group('/orders', function($routes) {
    $routes->get('store', 'OrderController::store');
});