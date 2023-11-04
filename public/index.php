<?php

$url = $_SERVER['REQUEST_URI'];

$url = strtok($url, '?');

$router = require_once '../src/router.php';

$routeInfo = $router->match($url);

$controllerName = $routeInfo['controller'];

$actionName = $routeInfo['action'];

require_once "../src/classes/controllers/$controllerName.php";

$controllerInstance = new \Classes\Controller\Home();

// print_r($controllerInstance);


$controllerInstance->$actionName(...$routeInfo['params']);
