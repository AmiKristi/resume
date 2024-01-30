<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('ami', 'PageController::index');
$routes->get('kristi', 'UserController::ami');
$routes->get('secondes', 'ThirdController::secondes');
$routes->get('thirdes', 'ThirdController::thirdes');
$routes->get('practice', 'ThirdController::practice');
$routes->get('home', 'ThirdController::home');
$routes->get('about', 'ThirdController::about');
$routes->get('education', 'ThirdController::education');
$routes->get('skills', 'ThirdController::skills');
$routes->get('interests', 'ThirdController::interests');
$routes->get('contact', 'ThirdController::contact');


$routes->get('blog', 'BlogController::index');

$routes->get('blog/create', 'BlogController::create');
$routes->post('blog/store', 'BlogController::store');

$routes->get('blog/edit/(:num)', 'BlogController::edit/$1');
$routes->post('blog/update/(:num)', 'BlogController::update/$1');
$routes->delete('blog/delete/(:num)', 'BlogController::delete/$1');