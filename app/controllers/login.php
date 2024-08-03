<?php

$email = $_POST['login_email'];
$password = $_POST['login_password'];
// DB
require('../Core/Database.php');
$config = require base_path('/config/config.php');
$db = new Database($config['database']);
// ERRORS
$errors = [];
// CHECK QUERY
$sql_user_check = "SELECT * FROM users WHERE email = :email";
// CHECK
$user = $db->queryOne($sql_user_check, ['email' => $email]);
//
if (!$user) {
    $errors['user'] = 'Email does not exist!';
    view('login.view.php', ['errors' => $errors]);
    exit();
}
// login
if (!password_verify($password, $user['password'])) {
    $errors['password'] = 'Password is incorrect!';
    view('login.view.php', ['errors' => $errors]);
    exit();
}

header('location: /');
exit();