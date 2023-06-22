<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/welcome_message', 'Home::index');
$routes->get('/conductorpg', 'Conductor::index');
$routes->get('/vehiculopg', 'Vehiculo::index');
$routes->get('/agregar', 'Conductor::agregar');
$routes->get('/agregarV', 'Vehiculo::agregarV');
$routes->post('/insertar', 'Conductor::insertar');
$routes->post('/insertarV', 'Vehiculo::insertarV');
$routes->get('/eliminar/(:num)', 'Conductor::eliminar/$1');
$routes->get('/eliminarV/(:num)', 'Vehiculo::eliminarV/$1');
$routes->get('/editar/(:num)', 'Conductor::editar/$1');
$routes->get('/editarV/(:num)', 'Vehiculo::editarV/$1');
$routes->post('/factualizar', 'Conductor::factualizar');
$routes->post('/factualizarV', 'Vehiculo::factualizarV');






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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
