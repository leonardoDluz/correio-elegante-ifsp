<?php

use Ifsp\CorreioElegante\Controller\Error404Controller;
use Ifsp\CorreioElegante\Infrastructure\Persistence\ConnectionCreator;
use Ifsp\CorreioElegante\Infrastructure\Repository\MensageRepository;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/config-database.php';

$connection = ConnectionCreator::createConnection();
$mensageRepository = new MensageRepository($connection);

$routes = require_once __DIR__ . '/../config/routes.php';
$pathInfo = $_SERVER['PATH_INFO'] ?? '/';
$httpMethod = $_SERVER['REQUEST_METHOD'];

$key = "$httpMethod|$pathInfo";

if (array_key_exists($key, $routes)) {
    $controllerClass = $routes["$httpMethod|$pathInfo"];

    $controller = new $controllerClass($mensageRepository);
} else {
    $controller = new Error404Controller();
}

/** @var Controller $controller */
$controller->processRequest();