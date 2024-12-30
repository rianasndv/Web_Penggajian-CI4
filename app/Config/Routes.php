<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get("/", 'User\User::index');
$routes->get("/admin/index", 'Admin\Admin::index');

// $routes->get("/admin", 'Admin::index', ['filter' => 'role:admin']);
// $routes->get("/admin/index", 'Admin::index', ['filter' => 'role:admin']);

$routes->get('/login', 'User\Home::index');
$routes->get('/register', 'User\Home::register');
$routes->get('/user', 'User\Home::user');

$routes->get('/user/profile', 'User\Myprofile::index');
$routes->post('/user/profile/update', 'User\Myprofile::update');

// pegawai
$routes->get('/pegawai', 'Pegawai::index');
$routes->post('/pegawai/add', 'Pegawai::add');
$routes->get('/pegawai/edit/(:any)', 'Pegawai::edit/$1');
$routes->post('/pegawai/update/', 'Pegawai::update/$1');
$routes->get('/pegawai/hapus/(:any)', 'Pegawai::hapus/$1');
$routes->post('/pegawai/hapus/', 'Pegawai::hapus/$1');

// tunjangan
$routes->get('/tunjangan', 'Tunjangan::index');
$routes->post('/tunjangan/add', 'Tunjangan::add');
$routes->get('/tunjangan/edit/(:any)', 'Tunjangan::edit/$1');
$routes->post('/tunjangan/update/', 'Tunjangan::update/$1');
$routes->get('/tunjangan/hapus/(:any)', 'Tunjangan::hapus/$1');
$routes->post('/tunjangan/hapus/', 'Tunjangan::hapus/$1');

// potongan
$routes->get('/potongan', 'Potongan::index');
$routes->post('/potongan/add', 'Potongan::add');
$routes->get('/potongan/edit/(:any)', 'Potongan::edit/$1');
$routes->post('/potongan/update/', 'Potongan::update/$1');
$routes->get('/potongan/hapus/(:any)', 'Potongan::hapus/$1');
$routes->post('/potongan/hapus/', 'Potongan::hapus/$1');

// penggajian
$routes->get('/penggajian', 'Penggajian::index');
$routes->post('/penggajian/add', 'Penggajian::add');
$routes->get('/penggajian/edit/(:any)', 'Penggajian::edit/$1');
$routes->post('/penggajian/update/(:any)', 'Penggajian::update/$1');
$routes->get('/penggajian/hapus/(:any)', 'Penggajian::hapus/$1');

//slip gaji
$routes->get('/pdf/cetak', 'PdfController::cetak');
$routes->get('/pdf/cetak/(:any)', 'PdfController::cetak/$1');

//laporan
$routes->get('admin/laporan', 'Laporan::index');
$routes->get('laporan/edit/(:segment)', 'Laporan::edit/$1');
$routes->post('laporan/update/(:segment)', 'Laporan::update/$1');
$routes->post('laporan/add', 'Laporan::add');
$routes->get('laporan/hapus/(:segment)', 'Laporan::hapus/$1');