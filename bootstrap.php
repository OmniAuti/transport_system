<?php
// DB
use Core\Database;
use Core\Container;
use Core\App;

$container = new Container();

$container->bind('database', function() {
    $config = require base_path('/config/config.php');
    return new Database($config['database']);
});

App::setContainer($container);

