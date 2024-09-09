<?php

// BaseController.php

namespace ProyectoDbPhp\Core;

use ProyectoDbPhp\Config\View;
use ProyectoDbPhp\Interfaces\IBaseController;

class BaseController implements IBaseController
{
    protected $title;

    public function render($view, $data = [])
    {
        $this->layoutHeader();
        View::render($view, $data);
        $this->layoutFooter();
    }

    // layoutHeader
    public function layoutHeader()
    {
        View::render('layout/header', ['title' => $this->title]);
    }

    // layoutFooter
    public function layoutFooter()
    {
        View::render('layout/footer');
    }
}