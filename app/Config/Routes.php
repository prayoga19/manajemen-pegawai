<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('register', 'RegisterController::index');
$routes->post('register/process', 'RegisterController::process');

$routes->get('/login', 'LoginController::index');
$routes->post('/login/process', 'LoginController::process');
$routes->get('/logout', 'LoginController::logout');



$routes->get('/pegawai', 'PegawaiController::index');
$routes->get('/pegawai/create', 'PegawaiController::create');
$routes->post('/pegawai/store', 'PegawaiController::store');
$routes->get('/pegawai/edit/(:num)', 'PegawaiController::edit/$1');
$routes->post('/pegawai/update/(:num)', 'PegawaiController::update/$1');

$routes->get('/pegawai/delete/(:num)', 'PegawaiController::delete/$1');

$routes->get('/user/edit-profile', 'UserController::editProfile');
$routes->post('/user/edit-profile', 'UserController::editProfile');



// app/Config/Routes.php

// $routes->post('/pegawai/create', 'PegawaiController::create', ['as' => 'pegawai.create']);
// $routes->post('/pegawai', 'PegawaiController::create', ['as' => 'pegawai.store']);
