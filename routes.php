<?php

$router->get('/', '../app/controllers/home.php');

$router->get('/schedule', '../app/controllers/single.php');

$router->post('/create', '../app/controllers/create.php');

$router->get('/create', '../views/create.view.php');

$router->get('/login', '../views/login.view.php');
$router->get('/login-employee', '../views/login-employee.view.php');

$router->post('/login', '../app/controllers/login.php');
$router->post('/login-employee', '../app/controllers/login-employee.php');

$router->get('/logout', '../app/controllers/logout.php');

$router->get('/register', '../views/register.view.php');
$router->post('/register', '../app/controllers/register.php');

$router->get('/register-employee', '../views/register-employee.view.php');
$router->post('/register-employee', '../app/controllers/register-employee.php');