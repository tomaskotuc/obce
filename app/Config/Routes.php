<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::index');
$routes->get('okres/(:num)/perPage/(:num)', 'Main::okres/$1/$2');

