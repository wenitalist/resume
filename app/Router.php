<?php

namespace App;

class Router
{
    public const MASS_URL = [
        "/" => [\App\Controllers\ControllerIndex::class, 'viewIndex'],
    ];

    public function checkUrl()
    {
        if (isset(self::MASS_URL[$_SERVER['REQUEST_URI']])) {
            
            $controllerClass = self::MASS_URL[$_SERVER['REQUEST_URI']][0];
            $method = self::MASS_URL[$_SERVER['REQUEST_URI']][1];
            $controller = new $controllerClass();

            if (!method_exists($controller, $method)) {
                $constrError = new \App\Controllers\ControllerError404();
                echo $constrError->inputError();
            } else {
                echo $controller->$method();
            }
        } else {
            $constrError = new \App\Controllers\ControllerError404();
            echo $constrError->inputError();
        }
    }
}
