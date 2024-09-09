<?php

// BaseController.php

namespace ProyectoDbPhp\Core;

use ProyectoDbPhp\Config\View;

class BaseController
{
    public function render($view, $data = [])
    {
        View::render($view, $data);
    }
}