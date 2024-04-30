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

$router->get('/', 'App\Controllers\SiteController@index');
$router->get('/contact', 'App\Controllers\SiteController@contact');
$router->get('/listing', 'App\Controllers\SiteController@listing');


//routes pour l'authentification
$router->get('/admin', 'App\Controllers\AuthController@login');
$router->get('/dashboard', 'App\Controllers\Admin\AdminController@dashboard');

try {
    $router->run();
} catch (NotFoundException $e) {
    return $e->error404();
}