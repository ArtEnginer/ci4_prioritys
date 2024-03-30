<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group('panel', ['namespace' => 'App\Controllers\Panel'], function ($routes) {
    $routes->group('jenis-layanan', function ($routes) {
        $routes->get('/', 'JenisLayanan::index', ['as' => 'data.jenis.layanan']);
        $routes->get('create', 'JenisLayanan::create', ['as' => 'jenis.layanan.create']);
        $routes->get('edit/(:num)', 'JenisLayanan::edit/$1', ['as' => 'jenis.layanan.edit']);
    });
    $routes->group('jenis-urgensi', function ($routes) {
        $routes->get('/', 'JenisUrgensi::index', ['as' => 'data.jenis.urgensi']);
        $routes->get('create', 'JenisUrgensi::create', ['as' => 'jenis.urgensi.create']);
        $routes->post('store', 'JenisUrgensi::store', ['as' => 'jenis.urgensi.store']);
        $routes->get('edit/(:num)', 'JenisUrgensi::edit/$1', ['as' => 'jenis.urgensi.edit']);
        $routes->post('update/(:num)', 'JenisUrgensi::update/$1', ['as' => 'jenis.urgensi.update']);
    });
    $routes->group('layanan', function ($routes) {
        $routes->get('/', 'Layanan::index', ['as' => 'data.layanan']);
        $routes->get('create', 'Layanan::create', ['as' => 'layanan.create']);
        $routes->get('edit/(:num)', 'Layanan::edit/$1', ['as' => 'layanan.edit']);
    });
});
