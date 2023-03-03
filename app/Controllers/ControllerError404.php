<?php

namespace App\Controllers;

class ControllerError404 extends AbstractController
{
    public function inputError()
    {
        return $this->render('error404.html', ['session' => $_SESSION]);
    }
}