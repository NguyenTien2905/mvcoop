<?php

namespace Tiennguyen\Mvcoop\Controllers\Client;

use Tiennguyen\Mvcoop\Commons\Controller;
use Tiennguyen\Mvcoop\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        return $this ->rederViewClient('home');
    }
}
