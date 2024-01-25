<?php

use Bramus\Router\Router;
use Tiennguyen\Mvcoop\Controllers\Client\HomeController;

// KHỞI TẠO ĐỐI TƯỢNG ROUTER
$router = new Router();

//KHAI BÁO CÁC ĐƯỜNG DẪN MÀ MÌNH MUỐN 

$router->get('/', HomeController::class . '@index');

// CHẠY DƯỜNG DẪN
$router->run();
