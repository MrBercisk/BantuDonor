<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


// $routes->get('/', 'Login::index');
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

$routes->get('/', 'Home::index');

/* Login */
$routes->get('login', 'Login::index');
$routes->post('login', 'Login::create');
$routes->get('login', 'Login::logout');

/* Daftar */
$routes->get('daftar', 'Daftar::index');
$routes->post('daftar', 'Daftar::create');


/* Data RS */
$routes->get('datars', 'DataRs::index');
$routes->post('datars', 'DataRs::create');
$routes->get('datars', 'DataRs::show/$1');
$routes->put('datars(:segment)', 'DataRs::update/$1');
$routes->delete('datars(:segment)', 'DataRs::delete/$1');

/* data Pendonor */
$routes->get('datapendonor', 'datapendonor::index');
$routes->post('datapendonor', 'datapendonor::create');
$routes->get('datapendonor', 'datapendonor::show/$1');
$routes->put('datapendonor(:segment)', 'datapendonor::update/$1');
$routes->delete('datapendonor(:segment)', 'datapendonor::delete/$1');

/* Pendonor */
$routes->get('pendonor', 'pendonor::index');
$routes->post('pendonor', 'pendonor::create');
$routes->get('pendonor', 'pendonor::show/$1');
$routes->put('pendonor(:segment)', 'pendonor::update/$1');
$routes->delete('pendonor(:segment)', 'pendonor::delete/$1');