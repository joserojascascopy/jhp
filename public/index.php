<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../routes/web.php';
require_once __DIR__ . '/../app/helpers/funciones.php';
require_once __DIR__ . '/../config/database.php';

use Models\Model;

$database = connect();

Model::setConnection($database);

$router->handleRequest();