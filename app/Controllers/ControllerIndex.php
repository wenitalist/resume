<?php

namespace App\Controllers;

class ControllerIndex extends AbstractController
{
    public function viewIndex()
    {
        return $this->render('index.html', ['session' => $_SESSION]);
    }
}