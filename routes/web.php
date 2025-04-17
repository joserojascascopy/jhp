<?php

use Controllers\HomeController;
use MVC\Router;

$router = new Router;

$router->get('/', [HomeController::class, 'index']);