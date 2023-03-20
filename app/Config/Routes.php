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
$routes->setAutoRoute(true);
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

$routes->get('/user/index', 'user\Landing_Page::index');
$routes->get('/user/dashboard', 'user\Landing_Page::dashboard');
$routes->get('/user/berjalan', 'user\Landing_Page::berjalan');
$routes->get('/user/riwayat', 'user\Landing_Page::riwayat');
$routes->get('/user/login', 'user\Landing_Page::login');
$routes->get('/user/profil', 'user\Landing_Page::profil');

$routes->get('/admin', 'admin\Dashboard::index');
$routes->get('/admin/login', 'admin\Dashboard::login');
$routes->get('/admin/jabatan', 'admin\JabatanController::jabatan');
$routes->delete('/admin/jabatan/(:num)', 'admin\JabatanController::delete/$1');
$routes->get('/admin/jabatan/Edit/(:num)', 'admin\JabatanController::edit/$1');
$routes->get('/admin/proses', 'admin\Dashboard::proses');
$routes->get('/admin/data_admin', 'admin\Dashboard::data_admin');
$routes->get('/admin/tanda_tangan', 'admin\Dashboard::tanda_tangan');
$routes->get('/admin/Pegawai', 'admin\PegawaiController::pegawai');
$routes->delete('/admin/Pegawai/(:num)', 'admin\PegawaiController::delete/$1');
$routes->get('/admin/Pegawai/Edit/(:num)', 'admin\PegawaiController::edit/$1');
$routes->get('/admin/jenis', 'admin\JenisController::jenis');
$routes->delete('/admin/jenis/(:num)', 'admin\JenisController::delete/$1');
$routes->get('/admin/jenis/Edit/(:num)', 'admin\JenisController::edit/$1');
$routes->get('/admin/surat/', 'admin\ArsipController::arsip');
$routes->delete('/admin/surat/(:num)', 'admin\ArsipController::delete/$1');
$routes->get('/admin/surat/Edit/(:num)', 'admin\ArsipController::edit/$1');
$routes->get('/admin/Pegawai/detail', 'admin\Dashboard::detail');

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
