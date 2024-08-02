<?php

$router->get('/', '../views/home.view.php');
$router->get('/register', '../views/register.view.php');
$router->post('/register', '../app/controllers/register.php');