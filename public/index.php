<?php

ini_set('display_errors', 1);

session_start();

require_once(__DIR__ . '/../vendor/autoload.php');

$router = new \App\Router();
$router->checkUrl();