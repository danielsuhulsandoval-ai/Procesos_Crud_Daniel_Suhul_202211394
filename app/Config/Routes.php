<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
// Existing Regiones routes (preserve)
$routes->get('regiones','RegionesController::index');
$routes->post('agregar_region','RegionesController::insertar');
$routes->get('eliminar/(:num)','RegionesController::eliminar/$1');
$routes->get('buscar/(:num)','RegionesController::buscar/$1');
$routes->post('modificar_region','RegionesController::modificar');

// CRUD routes for Ciudadanos
$routes->get('ciudadanos','CiudadanosController::index');
$routes->get('ciudadanos/create','CiudadanosController::create');
$routes->post('ciudadanos/store','CiudadanosController::store');
$routes->get('ciudadanos/edit/(:num)','CiudadanosController::edit/$1');
$routes->post('ciudadanos/update/(:num)','CiudadanosController::update/$1');
$routes->post('ciudadanos/delete/(:num)','CiudadanosController::delete/$1');

// CRUD routes for Departamentos
$routes->get('departamentos','DepartamentosController::index');
$routes->get('departamentos/create','DepartamentosController::create');
$routes->post('departamentos/store','DepartamentosController::store');
$routes->get('departamentos/edit/(:num)','DepartamentosController::edit/$1');
$routes->post('departamentos/update/(:num)','DepartamentosController::update/$1');
$routes->post('departamentos/delete','DepartamentosController::delete');

// CRUD routes for Municipios
$routes->get('municipios','MunicipiosController::index');
$routes->get('municipios/create','MunicipiosController::create');
$routes->post('municipios/store','MunicipiosController::store');
$routes->get('municipios/edit/(:num)','MunicipiosController::edit/$1');
$routes->post('municipios/update/(:num)','MunicipiosController::update/$1');
$routes->post('municipios/delete/(:num)','MunicipiosController::delete/$1');

// CRUD routes for Regiones (additional RESTful)
$routes->get('regiones','RegionesController::index');
$routes->get('regiones/create','RegionesController::create');
$routes->post('regiones/store','RegionesController::store');
$routes->get('regiones/edit/(:num)','RegionesController::edit/$1');
$routes->post('regiones/update/(:num)','RegionesController::update/$1');
$routes->post('regiones/delete/(:num)','RegionesController::delete/$1');

// CRUD routes for Niveles Académicos
$routes->get('niveles','NivelesAcademicosController::index');
$routes->get('niveles/create','NivelesAcademicosController::create');
$routes->post('niveles/store','NivelesAcademicosController::store');
$routes->get('niveles/edit/(:num)','NivelesAcademicosController::edit/$1');
$routes->post('niveles/update/(:num)','NivelesAcademicosController::update/$1');
$routes->post('niveles/delete/(:num)','NivelesAcademicosController::delete/$1');
?>