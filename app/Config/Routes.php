<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->group('api', ['namespace' => 'App\Controllers\Api'], function ($routes) {
    $routes->group('jenis-layanan', function ($routes) {
        $routes->get('/', 'JenisLayanan::index');
        $routes->post('create', 'JenisLayanan::create');
        $routes->get('edit/(:num)', 'JenisLayanan::edit/$1');
        $routes->post('update/(:num)', 'JenisLayanan::update/$1');
        $routes->delete('delete/(:num)', 'JenisLayanan::delete/$1', ['as' => 'jenis-layanan-delete']);
    });
    $routes->group('jenis-urgensi', function ($routes) {
        $routes->get('/', 'JenisUrgensi::index');
        $routes->post('create', 'JenisUrgensi::create');
        $routes->get('edit/(:num)', 'JenisUrgensi::edit/$1');
        $routes->post('update/(:num)', 'JenisUrgensi::update/$1');
        $routes->delete('delete/(:num)', 'JenisUrgensi::delete/$1', ['as' => 'jenis-urgensi-delete']);
    });
    $routes->group('layanan', function ($routes) {
        $routes->get('/', 'Layanan::index');
        $routes->post('create', 'Layanan::create');
        $routes->get('edit/(:num)', 'Layanan::edit/$1');
        $routes->post('update/(:num)', 'Layanan::update/$1');
        $routes->delete('delete/(:num)', 'Layanan::delete/$1', ['as' => 'layanan-delete']);
    });
});

$routes->group('panel', ['namespace' => 'App\Controllers\Panel'], function ($routes) {
    $routes->group('jenis-layanan', function ($routes) {
        $routes->get('/', 'JenisLayanan::index', ['as' => 'data-jenis-layanan']);
        $routes->get('create', 'JenisLayanan::create', ['as' => 'jenis-layanan-create']);
        $routes->get('edit/(:num)', 'JenisLayanan::edit/$1', ['as' => 'jenis-layanan-edit']);
    });
    $routes->group('jenis-urgensi', function ($routes) {
        $routes->get('/', 'JenisUrgensi::index', ['as' => 'data-jenis-urgensi']);
        $routes->get('create', 'JenisUrgensi::create', ['as' => 'jenis-urgensi-create']);
        $routes->get('edit/(:num)', 'JenisUrgensi::edit/$1', ['as' => 'jenis-urgensi-edit']);
    });
    $routes->group('layanan', function ($routes) {
        $routes->get('/', 'Layanan::index', ['as' => 'data-layanan']);
        $routes->get('create', 'Layanan::create', ['as' => 'layanan-create']);
        $routes->get('edit/(:num)', 'Layanan::edit/$1', ['as' => 'layanan-edit']);
    });
});
