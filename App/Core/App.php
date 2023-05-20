<?php

namespace App\Core;

class App {
    protected $routes = [];

    public function __construct() {
        // Define your routes here
        $this->defineRoutes();
    }

    public function run() {
        // Get the current URL
        $url = $_SERVER['REQUEST_URI'];

        // Find the matching route
        $route = $this->findRoute($url);

        // If a route is found, call the corresponding controller method
        if ($route) {
            $controllerName = $route['controller'];
            $methodName = $route['method'];
            $parameters = $route['parameters'];

            $controller = new $controllerName();
            $controller->$methodName(...$parameters);
        } else {
            // Handle 404 - Route not found
            echo '404 - Page not found';
        }
    }

    protected function defineRoutes() {
        // Define your routes here
        $this->routes = [
            // Example routes
            '/' => ['controller' => 'App\Controllers\HomeController', 'method' => 'index'],
            '/about' => ['controller' => 'App\Controllers\AboutController', 'method' => 'index'],
            '/contact' => ['controller' => 'App\Controllers\ContactController', 'method' => 'index'],
        ];
    }

    protected function findRoute($url) {
        // Find the matching route based on the URL
        if (array_key_exists($url, $this->routes)) {
            return $this->routes[$url];
        }

        return null;
    }
}
