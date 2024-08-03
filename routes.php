<?php

$router->get('/', '../views/home.view.php');
$router->get('/login', '../views/login.view.php');
$router->post('/login', '../app/controllers/login.php');
$router->get('/register', '../views/register.view.php');
$router->post('/register', '../app/controllers/register.php');