<?php

namespace App\Controllers;

class ControllerIndex extends AbstractController
{
    public function viewIndex()
    {
        return $this->render('/index.php', ['session' => $_SESSION]);
    }
}