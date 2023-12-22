<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// 
$routes->get('index', 'LoginController::index'); // LOGIN ROUTE
$routes->post('loginVerify', 'LoginController::loginVerify');

$routes->get('register', 'LoginController::register'); // REGISTER ROUTE
$routes->post('registerStep', 'LoginController::registerStep');


