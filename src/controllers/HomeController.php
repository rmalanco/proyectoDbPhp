<?php

namespace ProyectoDbPhp\Controllers;

use ProyectoDbPhp\Core\BaseController;
use ProyectoDbPhp\Repositories\HomeRepository;

class HomeController extends BaseController
{
    public function index()
    {
        // $this->render('home/index');
        $homeRepository = new HomeRepository();
        $homeData = $homeRepository->getHomeData();
        $this->render('home/index', $homeData);
    }
}