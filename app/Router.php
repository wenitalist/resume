<?php

namespace App;

class Router
{
    public const massUrl = [
        "/" => [\App\Controllers\ControllerIndex::class, 'viewIndex'],

    ];

    public function checkUrl()
    {
        if (isset(self::massUrl[$_SERVER['REQUEST_URI']])) {
            
            $controllerClass = self::massUrl[$_SERVER['REQUEST_URI']][0];
            $method = self::massUrl[$_SERVER['REQUEST_URI']][1];
            $controller = new $controllerClass();

            if (($controller->$method()) == null) {
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
