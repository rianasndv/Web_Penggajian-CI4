<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/login', 'User\Home::index');
$routes->get('/register', 'User\Home::register');
$routes->get('/user', 'User\Home::user');
