<?php
    const BASE_PATH = __DIR__ . '/../';
    require BASE_PATH . 'functions.php';



    // ROUTER
    require('../Core/Router.php');
    $router = new Router();
    require base_path('routes.php');
    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
    $method = $_POST['method'] ?? $_SERVER['REQUEST_METHOD'];
    $router->route($uri, $method);