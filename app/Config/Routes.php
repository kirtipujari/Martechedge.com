<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

//Advertizing
$routes->get('advertizing','Advertizing::index');
$routes->get('advertizing/video-advertizing', 'Advertizing::video_advertizing');
$routes->get('advertizing/fm-advertizing', 'Advertizing::fm_advertizing');
$routes->get('advertizing/radio-advertizing', 'Advertizing::radio_advertizing');

$routes->get('blog','Blog::index');
$routes->get('contact','Contact::index');

//Interviews
$routes->get('interviews','Interviews::index');
$routes->get('interviews/technical-round', 'Interviews::technical_round');
$routes->get('interviews/practical-round',  'Interviews::practical_round');
$routes->get('interviews/final-round', 'Interviews::final_round');

$routes->get('news','News::index');

//Martech_radar

$routes->get('martech-radar','Martech_radar::index');
$routes->get('martech-radar/audio-advertizing', 'Martech_radar::audio_advertizing');
$routes->get('martech-radar/content-marketing', 'Martech_radar::content_marketing');
$routes->get('martech-radar/business',  'Martech_radar::business');

//

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
