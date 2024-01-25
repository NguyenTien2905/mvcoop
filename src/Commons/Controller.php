<?php

namespace Tiennguyen\Mvcoop\Commons;
use eftec\bladeone\BladeOne;

class Controller
{
    public function rederViewClient($view, $data = [])
    {
        $templatePath = __DIR__ . '/../Views/Client';

        $blade = new BladeOne($templatePath);

        echo $blade->run($view, $data);
    }
    public function rederViewAdmin($view, $data = [])
    {
        $templatePath = __DIR__ . '/../Views/Admin';

        $blade = new BladeOne($templatePath);

        echo $blade->run($view, $data);
    }
}
