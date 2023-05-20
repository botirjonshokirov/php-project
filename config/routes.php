<?php

// Include necessary controller files
require_once 'controllers/HomeController.php';
require_once 'controllers/ProductController.php';
require_once 'controllers/CartController.php';
require_once 'controllers/AdminController.php';

// Create route mappings
$routes = [
    '/' => ['controller' => 'HomeController', 'action' => 'index'],
    '/product/{id}' => ['controller' => 'ProductController', 'action' => 'show'],
    '/cart' => ['controller' => 'CartController', 'action' => 'view'],
    '/cart/add/{id}' => ['controller' => 'CartController', 'action' => 'addToCart'],
    '/cart/remove/{id}' => ['controller' => 'CartController', 'action' => 'removeFromCart'],
    '/admin' => ['controller' => 'AdminController', 'action' => 'dashboard'],
    '/admin/products' => ['controller' => 'AdminController', 'action' => 'manageProducts'],
    '/admin/orders' => ['controller' => 'AdminController', 'action' => 'manageOrders'],
    '/admin/users' => ['controller' => 'AdminController', 'action' => 'manageUsers'],
];

// Resolve the requested route
$path = $_SERVER['REQUEST_URI'];
$routeFound = false;

foreach ($routes as $route => $params) {
    $pattern = '/^' . str_replace('/', '\/', $route) . '$/';
    if (preg_match($pattern, $path, $matches)) {
        $routeFound = true;
        $controller = $params['controller'];
        $action = $params['action'];

        // Invoke the corresponding controller action
        $controllerObject = new $controller();
        $controllerObject->$action($matches);
        break;
    }
}

// Handle route not found
if (!$routeFound) {
    // Display a 404 error page or redirect to a default route
    echo '404 Page Not Found';
}
