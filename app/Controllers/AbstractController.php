<?php

namespace App\Controllers;

abstract class AbstractController
{
    public function render(string $view, array $forRender = []): string
    {
        return require(__DIR__ . $view); // фиксить
    }
}
