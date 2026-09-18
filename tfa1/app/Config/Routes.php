<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

$routes->get('/about','Pages::about');
$routes->get('/users','Users::index');
$routes->get('/customers','Customers::index');