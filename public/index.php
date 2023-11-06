<?php

require_once '../src/bootstrap.php';

$url = $_SERVER['REQUEST_URI'];

$url = strtok($url, '?');

$routeInfo = $router->match($url);

$controllerName = $routeInfo['controller'];

$class = 'Controller\\' . $routeInfo['controller'];

$actionName = $routeInfo['action'];

require_once "../src/classes/controller/$controllerName.php";

$controllerInstance = new $class();

$controllerInstance->$actionName(...$routeInfo['params']);
