<?php

use App\exceptions\NotFoundException;
use Router\Router;

require_once __DIR__. '/../vendor/autoload.php';

define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);

const DB_HOST = 'localhost';
const DB_NAME = 'tekauto';
const DB_USER = 'root';
const DB_PWD = '';

$router = new Router($_GET['url']);

//pour la partie site web
$router->get('/', 'App\Controllers\SiteController@index');
$router->get('/contact', 'App\Controllers\SiteController@contact');
$router->get('/listing', 'App\Controllers\SiteController@listing');
$router->get('/login', 'App\Controllers\SiteController@login');
$router->get('/register', 'App\Controllers\SiteController@register');

//routes pour la partie administration
$router->get('/admin/dashboard', 'App\Controllers\Admin\AdminController@dashboard');

$router->get('/admin/dashboard/cars', 'App\Controllers\Admin\CarController@index');
$router->get('/admin/dashboard/cars/create', 'App\Controllers\Admin\CarController@create');
$router->post('/admin/dashboard/cars/store', 'App\Controllers\Admin\CarController@store');
$router->get('/admin/dashboard/cars/edit/:id', 'App\Controllers\Admin\CarController@edit');
$router->post('/admin/dashboard/cars/update/:id', 'App\Controllers\Admin\CarController@update');
$router->get('/admin/dashboard/cars/show/:id', 'App\Controllers\Admin\CarController@show');
$router->post('/admin/dashboard/cars/delete/:id', 'App\Controllers\Admin\CarController@destroy');

$router->get('/admin/dashboard/bookings', 'App\Controllers\Admin\AdminController@bookings');
$router->get('/admin/dashboard/bills', 'App\Controllers\Admin\AdminController@bills');

$router->get('/admin/dashboard/users', 'App\Controllers\Admin\UserController@index');
$router->get('/admin/dashboard/users/create', 'App\controllers\admin\UserController@create');
$router->post('/admin/dashboard/users/store', 'App\controllers\admin\UserController@store');
$router->get('/admin/dashboard/users/edit/:id', 'App\controllers\admin\UserController@edit');
$router->post('/admin/dashboard/users/update/:id', 'App\controllers\admin\UserController@update');
$router->get('/admin/dashboard/users/show/:id', 'App\controllers\admin\UserController@show');
$router->post('/admin/dashboard/users/delete/:id', 'App\controllers\admin\UserController@destroy');



//routes pour l'authentification
$router->get('/admin', 'App\Controllers\AuthController@login');
$router->post('/admin/login', 'App\Controllers\AuthController@performLogin');
$router->get('/logout', 'App\Controllers\AuthController@logout');


//route 403
$router->get('/admin/dashboard/access-denied', 'App\Controllers\Admin\AdminController@accessDenied');

try {
    $router->run();
} catch (NotFoundException $e) {
    return $e->error404();
}