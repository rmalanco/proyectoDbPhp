<?php

namespace ProyectoDbPhp\Config;

class App
{
    public static function run()
    {
        require_once __DIR__ . '/../config/DataBase.php';
        require_once __DIR__ . '/../config/Connection.php';
        require_once __DIR__ . '/../config/Routes.php';
        Routes::run();
    }
}