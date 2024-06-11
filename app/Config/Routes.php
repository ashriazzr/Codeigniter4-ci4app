<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
//  */
$routes->setAutoRoute(true); //Jangan di hapus
$routes->get('/', 'Pages::index');
