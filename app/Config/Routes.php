<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/api/health', 'HealthCheck::index');
$routes->get('/api/api_check', 'Api\Api_check::index');
$routes->get('/api/api_check/checkDbConnection', 'Api\Api_check::checkDbConnection');
$routes->get('/web/api_check', 'Web\Api_check::index');
