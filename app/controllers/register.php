<?php

$email = $_POST['register_email'];
$user_name = $_POST['register_user_name'];
$password = $_POST['register_password'];
    
// DB
require('../Core/Database.php');
$config = require base_path('/config/config.php');
$db = new Database($config['database']);
$sql = "INSERT INTO users (email, user_name, password) VALUES (:email, :user_name, :password)";

$db->create($sql, ['email' => $email, 'user_name' => $user_name, 'password' => $password]);
header('location: /');
exit();