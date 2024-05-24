<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index');
$routes->post('/login/cekUser', 'Login::cekUser');
$routes->get('/logout', 'Login::logout');
$routes->get('/home', 'Home::index');

$routes->get('/register', 'Register::index');