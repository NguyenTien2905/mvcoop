<?php

namespace Tiennguyen\Mvcoop\Controllers\Admin;

use Tiennguyen\Mvcoop\Commons\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return $this->rederViewAdmin('dashboard');
    }
}
