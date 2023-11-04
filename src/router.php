<?php

require_once '../vendor/autoload.php';

class Router
{
    private $routes = [];

    public function addRoute($pattern, $controller, $action)
    {
        $this->routes[$pattern] = ['controller' => $controller, 'action' => $action];
    }

    public function match($url)
    {
        // print_r($this->routes);

        foreach ($this->routes as $pattern => $params) {
            if (preg_match($pattern, $url, $matches)) {
                array_shift($matches); 
                return ['controller' => $params['controller'], 'action' => $params['action'], 'params' => $matches];
            }
        }
        return ['controller' => 'ErrorController', 'action' => 'error404', 'params' => []];
    }
}

$router = new Router();

// Rotas para UserController
$router->addRoute('/^\/user\/?$/', 'User', 'index');
$router->addRoute('/^\/user\/create\/?$/', 'User', 'create');
$router->addRoute('/^\/user\/edit\/(\d+)\/?$/', 'User', 'edit');
$router->addRoute('/^\/user\/delete\/(\d+)\/?$/', 'User', 'delete');

// Rota para a página inicial (home)
$router->addRoute('/^\/?$/', 'Home', 'index');

// Rota padrão para erro 404
$router->addRoute('/.*/', 'ErrorController', 'error404');

return $router;
