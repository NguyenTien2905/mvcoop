<?php

use Bramus\Router\Router;
use Tiennguyen\Mvcoop\Controllers\Admin\CategoryController;
use Tiennguyen\Mvcoop\Controllers\Admin\DashboardController;
use Tiennguyen\Mvcoop\Controllers\Client\HomeController;
use Tiennguyen\Mvcoop\Controllers\Admin\UserController;
use Tiennguyen\Mvcoop\Controllers\Admin\AuthenticateController;

// KHỞI TẠO ĐỐI TƯỢNG ROUTER
$router = new Router();

//KHAI BÁO CÁC ĐƯỜNG DẪN MÀ MÌNH MUỐN 

$router->get('/', HomeController::class . '@index');
// $router->get('/', DashboardController::class . '@index');

$router->match('GET|POST', '/auth/login', AuthenticateController::class . '@login');

$router->mount('/admin', function () use ($router) {
    $router->get('/',  DashboardController::class . '@index');
    $router->get('/logout', AuthenticateController::class . '@logout');

    $router->mount('/users', function () use ($router) {
        $router->get('/',                           UserController::class . '@index');
        $router->get('/{id}/show',                  UserController::class . '@show');
        $router->get('/{id}/delete',                UserController::class . '@delete');
        $router->match('GET|POST', '/{id}/update',  UserController::class . '@update');
        $router->match('GET|POST', '/create',       UserController::class . '@create');
    });

    $router->mount('/categories', function () use ($router) {
        $router->get('/',                           CategoryController::class . '@index');
        $router->get('/{id}/show',                  CategoryController::class . '@show');
        $router->get('/{id}/delete',                CategoryController::class . '@delete');
        $router->match('GET|POST', '/{id}/update',  CategoryController::class . '@update');
        $router->match('GET|POST', '/create',       CategoryController::class . '@create');
    });
});

$router -> before('GET|POST', '/admin/*', function(){
    if (!isset($_SESSION['user'])){
        header('Location: /auth/login');
        exit();
    }
});


// CHẠY DƯỜNG DẪN
$router->run();
