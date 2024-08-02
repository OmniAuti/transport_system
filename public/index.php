<?php
    const BASE_PATH = __DIR__ . '/../';
    require BASE_PATH . 'functions.php';

    require('../Core/Database.php');
    $config = require base_path('/config/config.php');
    $db = new Database($config['database']);

    $routes = [
        '/' => '../views/home.view.php',
        '/register' => '../views/register.view.php',
    ];

    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

    if (array_key_exists($uri, $routes)) {
        require($routes[$uri]);
    }