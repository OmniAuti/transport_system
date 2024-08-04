<?php
// DB
require('../Core/Database.php');
require base_path('Core/Container.php');
require base_path('Core/App.php');

$app = new App();
$container = new Container();
$container->bind('database', function() {
    $config = require base_path('/config/config.php');
    return new Database($config['database']);
});

app::setContainer($container);

