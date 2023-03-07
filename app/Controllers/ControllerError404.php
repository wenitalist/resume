<?php

namespace App\Controllers;

class ControllerError404 extends AbstractController
{
    public function inputError()
    {
        return $this->render('/error404.php', ['session' => $_SESSION]);
    }
}