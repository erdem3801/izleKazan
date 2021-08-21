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

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'controlCenterController::controlCenter', ['filter' => 'Auth']);


$routes->get('addAdverts', 'addAdvertsController::addAdverts');

$routes->group('api', function ($routes) {
	$routes->match(['get', 'post'], '(:segment)', 'api::$1');
	$routes->match(['get', 'post'], '(:segment)/(:any)', 'api::$1/$2');
});



$routes->group('{locale}', ['filter' => 'Auth'], function ($routes) {

	$routes->get('/', 'controlCenterController::controlCenter');

	$routes->group('home', function ($routes) {
		$routes->match(['get', 'post'], '(:segment)', 'Home::$1');
	});

	$routes->group('user', function ($routes) {
		$routes->match(['get', 'post'], 'profile', 'userController::profile');
	});
	$routes->group('controlCenter', function ($routes) {
		$routes->match(['get', 'post'], '/', 'controlCenterController::controlCenter');
		$routes->match(['get', 'post'], '(:segment)', 'controlCenterController::$1');
	});

	$routes->group('video', function ($routes) {
		$routes->match(['get', 'post'], '(:segment)', 'videoController::$1');
	});

	$routes->group('adverts', function ($routes) {
		$routes->match(['get', 'post'], '(:segment)', 'advertsController::$1');
	});

	$routes->group('referrals', function ($routes) {
		$routes->match(['get', 'post'], '(:segment)', 'referralsController::$1');
	});
});

$routes->group('{locale}/user', function ($routes) {
	$routes->match(['get', 'post'], '(:segment)', 'userController::$1');
});

$routes->group('user', function ($routes) {
	$routes->match(['get', 'post'], '(:segment)', 'userController::$1');
});

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
