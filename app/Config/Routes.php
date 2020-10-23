<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// Main
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::home');
$routes->get('/kontak-kami', 'Home::kontak_kami');
$routes->get('/tentang-kami', 'Home::tentang_kami');
$routes->get('/produk', 'Home::produk');
$routes->get('/semua-penjual', 'Home::semua_penjual');
$routes->get('/wishlist', 'Home::wishlist');

// Penjual Dashboard
$routes->get('/penjual', 'Penjual::index');
$routes->get('/penjual/add-product', 'Penjual::add_product');
$routes->get('/penjual/ubah-profile', 'Penjual::ubah_profile');

// AUTH
$routes->get('/auth', 'Auth::index');
$routes->get('/auth/register', 'Auth::register');

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
