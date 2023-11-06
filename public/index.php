<?php

$url = $_SERVER['REQUEST_URI'];

$url = strtok($url, '?');

$router = require_once '../src/router.php';

$routeInfo = $router->match($url);

$controllerName = $routeInfo['controller'];

$class = '\Classes\Controller\\' . $routeInfo['controller'];

$actionName = $routeInfo['action'];

require_once "../src/classes/controllers/$controllerName.php";

$controllerInstance = new $class();

$controllerInstance->$actionName(...$routeInfo['params']);
