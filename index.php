<?php

use Ifsp\CorreioElegante\Controller\Error404Controller;
use Ifsp\CorreioElegante\Infrastructure\Persistence\ConnectionCreator;
use Ifsp\CorreioElegante\Infrastructure\Repository\MensageRepository;
use Ifsp\CorreioElegante\Infrastructure\Repository\UserRepository;

require_once __DIR__ . '/vendor/autoload.php';

$connection = ConnectionCreator::createConnection();

$routes = require_once __DIR__ . '/config/routes.php';
$pathInfo = $_SERVER['PATH_INFO'] ?? '/';
$httpMethod = $_SERVER['REQUEST_METHOD'];

$key = "$httpMethod|$pathInfo";

if ($pathInfo == '/login') {
    $repository = new UserRepository($connection);
} elseif ($pathInfo == ('/central-mensagens' || '/mensagem')){
    $repository = new MensageRepository($connection);    
}

$loginRoute = '/login';

session_start();
if (!array_key_exists('logged', $_SESSION) && !$loginRoute) {
    header('Location:/login');
    return;
}

if (array_key_exists($key, $routes)) {
    $controllerClass = $routes["$httpMethod|$pathInfo"];
    $controller = new $controllerClass($repository);
} else {
    $controller = new Error404Controller();
}

/** @var Controller $controller */
$controller->processRequest();