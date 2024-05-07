<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('pengajuan', 'Home::pengajuan', ['as' => 'pengajuan']);



$routes->group('panel', ['namespace' => 'App\Controllers\Panel'], function ($routes) {
    $routes->get('/', 'Dashboard::index', ['as' => 'panel.dashboard']);
    $routes->group('jenis-urgensi', function ($routes) {
        $routes->get('/', 'JenisUrgensi::index', ['as' => 'data.jenis.urgensi']);
        $routes->get('create', 'JenisUrgensi::create', ['as' => 'jenis.urgensi.create']);
        $routes->post('store', 'JenisUrgensi::store', ['as' => 'jenis.urgensi.store']);
        $routes->get('edit/(:num)', 'JenisUrgensi::edit/$1', ['as' => 'jenis.urgensi.edit']);
        $routes->post('update/(:num)', 'JenisUrgensi::update/$1', ['as' => 'jenis.urgensi.update']);
        $routes->get('delete/(:num)', 'JenisUrgensi::delete/$1', ['as' => 'jenis.urgensi.delete']);
    });
    $routes->group('jenis-layanan', function ($routes) {
        $routes->get('/', 'JenisLayanan::index', ['as' => 'data.jenis.layanan']);
        $routes->get('create', 'JenisLayanan::create', ['as' => 'jenis.layanan.create']);
        $routes->post('store', 'JenisLayanan::store', ['as' => 'jenis.layanan.store']);
        $routes->get('edit/(:num)', 'JenisLayanan::edit/$1', ['as' => 'jenis.layanan.edit']);
        $routes->post('update/(:num)', 'JenisLayanan::update/$1', ['as' => 'jenis.layanan.update']);
        $routes->get('delete/(:num)', 'JenisLayanan::delete/$1', ['as' => 'jenis.layanan.delete']);
    });
    $routes->group('layanan', function ($routes) {
        $routes->get('/', 'Layanan::index', ['as' => 'data.layanan']);
        $routes->get('create', 'Layanan::create', ['as' => 'layanan.create']);
        $routes->post('store', 'Layanan::store', ['as' => 'layanan.store']);
        $routes->get('edit/(:num)', 'Layanan::edit/$1', ['as' => 'layanan.edit']);
        $routes->post('update/(:num)', 'Layanan::update/$1', ['as' => 'layanan.update']);
        $routes->get('delete/(:num)', 'Layanan::delete/$1', ['as' => 'layanan.delete']);
        $routes->get('accept/(:num)', 'Layanan::accept/$1', ['as' => 'layanan.accept']);
        $routes->get('show/(:num)', 'Layanan::show/$1', ['as' => 'layanan.show']);
    });
});
