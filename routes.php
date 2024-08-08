<?php

$router->get('/', '../app/controllers/home.php');

$router->get('/schedule', '../app/controllers/single.php');

$router->post('/create', '../app/controllers/create.php');

$router->get('/create', '../views/create.view.php');

$router->get('/login', '../views/login.view.php');
$router->get('/login-driver', '../views/login-driver.view.php');

$router->post('/login', '../app/controllers/login.php');
$router->post('/login-driver', '../app/controllers/login-driver.php');

$router->get('/register', '../views/register.view.php');
$router->get('/register-driver', '../views/register-driver.view.php');

$router->post('/register', '../app/controllers/register.php');
$router->post('/register-driver', '../app/controllers/register-driver.php');