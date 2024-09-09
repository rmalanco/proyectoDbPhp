<?php

namespace ProyectoDbPhp\Controllers;

use ProyectoDbPhp\Core\BaseController;
use ProyectoDbPhp\Repositories\HomeRepository;

class HomeController extends BaseController
{
    private $homeRepository;

    public function __construct()
    {
        $this->homeRepository = new HomeRepository();
    }

    public function index()
    {
        $homeData = $this->homeRepository->getHomeData();
        $this->title = $homeData['titulo'];
        $this->render('home/index', $homeData);
    }
}