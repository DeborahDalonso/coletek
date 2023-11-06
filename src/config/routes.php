<?php

$routes = [];

// Rotas User
$routes['/user'] = ['controller' => 'User', 'action' => 'index'];
$routes['/user/create'] = ['controller' => 'User', 'action' => 'create'];
$routes['/user/store'] = ['controller' => 'User', 'action' => 'store'];
$routes['/user/edit/(\d+)'] = ['controller' => 'User', 'action' => 'edit'];
$routes['/user/delete/(\d+)'] = ['controller' => 'User', 'action' => 'delete'];

// Rota Main
$routes['/'] = ['controller' => 'Main', 'action' => 'index'];

// Rota Erro HTTP
$routes['*'] = ['controller' => 'ErrorController', 'action' => 'error404'];

return $routes;
