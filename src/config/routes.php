<?php

$routes = [];

// Rotas para UserController
$routes['/user'] = ['controller' => 'User', 'action' => 'index'];
$routes['/user/create'] = ['controller' => 'User', 'action' => 'create'];
$routes['/user/store'] = ['controller' => 'User', 'action' => 'store'];
$routes['/user/edit/(\d+)'] = ['controller' => 'User', 'action' => 'edit'];
$routes['/user/delete/(\d+)'] = ['controller' => 'User', 'action' => 'delete'];

// Rota para a página inicial (home)
$routes['/'] = ['controller' => 'Main', 'action' => 'index'];

// Rota padrão para erro 404
$routes['*'] = ['controller' => 'ErrorController', 'action' => 'error404'];

return $routes;
