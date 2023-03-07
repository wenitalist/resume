<?php

namespace App\Controllers;

abstract class AbstractController
{
    public function render(string $view, array $forRender = [])
    {
        require(__DIR__ . '/../../views' . $view);
    }
}
