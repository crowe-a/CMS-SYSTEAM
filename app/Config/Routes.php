<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('login', 'Login::login');
// $routes->get('login/authenticate', 'login::authenticate');
$routes->post('/login/authenticate', 'Login::authenticate');
$routes->get('/logout', 'Login::logout'); // Logout işlemi için route

$routes->get('register', 'Register::index');
$routes->post('register', 'Register::store');


$routes->get('product_list', 'admin_control::product_list');
$routes->get('product_management', 'admin_control::product_management');
$routes->get('order_management', 'admin_control::order_management');
$routes->get('user_management', 'admin_control::user_management');



