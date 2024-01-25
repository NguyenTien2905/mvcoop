<?php

namespace Tiennguyen\Mvcoop\Controllers\Client;

use Tiennguyen\Mvcoop\Commons\Controller;
use Tiennguyen\Mvcoop\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $name = 'Nguyễn Văn A ';
        $email = 'Email@gmail.com';
        $password = 'abc1234';

        $user = new User;
        $user -> insert($name, $email, $password);
        return $this ->rederViewClient('home');
    }
}
