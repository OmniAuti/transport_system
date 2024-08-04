<?php
    const BASE_PATH = __DIR__ . '/../';
    require BASE_PATH . 'functions.php';
    spl_autoload_register(function($class) {
        $class = str_replace('\\', '/', $class);
         require base_path($class.'.php');
    });
    // ROUTER
    use Core\Router;
    $router = new Router();
    require base_path('routes.php');
    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
    $method = $_POST['method'] ?? $_SERVER['REQUEST_METHOD'];
    $router->route($uri, $method);