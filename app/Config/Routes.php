<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/cari-pekerja/(:num)', 'Home::cari/$1');
$routes->add('/search-pekerja/(:num)', 'Home::search/$1');

//admin
$routes->get('/admin', 'Admin\Admin::index');
$routes->get('/login', 'Admin\Login::index');
$routes->post('/login/process', 'Admin\Login::process');
$routes->get('/data-pekerja/(:num)', 'Admin\DataPekerja::index/$1');
$routes->get('/data-pekerja/tambah/(:num)', 'Admin\DataPekerja::tambah/$1');
$routes->post('/data-pekerja/simpan/(:num)', 'Admin\DataPekerja::simpan/$1');
$routes->get('/data-pekerja/ubah/(:num)', 'Admin\DataPekerja::ubah/$1');
$routes->post('/data-pekerja/edit/(:num)', 'Admin\DataPekerja::edit/$1');
$routes->get('/data-pekerja/hapus/(:num)', 'Admin\DataPekerja::hapus/$1');
$routes->get('/logout', 'Admin\Login::logout');
$routes->get('/data-pengguna', 'Admin\DataPengguna::index');
$routes->get('/data-pengguna/tambah', 'Admin\DataPengguna::tambah');
$routes->post('/data-pengguna/simpan', 'Admin\DataPengguna::simpan');
$routes->get('/data-pengguna/ubah/(:num)', 'Admin\DataPengguna::ubah/$1');
$routes->post('/data-pengguna/edit', 'Admin\DataPengguna::edit');
$routes->get('/data-pengguna/hapus/(:num)', 'Admin\DataPengguna::hapus/$1');

/*
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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
