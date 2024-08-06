<?php

// $router->get('/', '../views/home.view.php');
$router->get('/', '../app/controllers/home.php');

$router->get('/schedule', '../app/controllers/single.php');

$router->post('/create', '../app/controllers/create.php');

$router->get('/create', '../views/create.view.php');

$router->get('/login', '../views/login.view.php');
$router->post('/login', '../app/controllers/login.php');
$router->get('/register', '../views/register.view.php');
$router->post('/register', '../app/controllers/register.php');