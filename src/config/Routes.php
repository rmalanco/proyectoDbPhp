<?php

namespace ProyectoDbPhp\Config;

class Routes
{
    public static function run()
    {
        $controller = 'ProyectoDbPhp\Controllers\\';
        $controller .= isset($_GET['controller']) ? $_GET['controller'] : 'Home';
        $controller .= 'Controller';

        $action = isset($_GET['action']) ? $_GET['action'] : 'index';

        if (!class_exists($controller)) {
            echo ERROR_CONTROLLER_NOT_FOUND;
            die;
        }

        $controller = new $controller;

        if (!method_exists($controller, $action)) {
            echo ERROR_ACTION_NOT_FOUND;
            die;
        }

        $controller->$action();
    }
}
