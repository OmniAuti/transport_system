<?php

use Core\App;

$email = $_POST['register_email'];
$username = $_POST['register_username'];
$password = $_POST['register_password'];
// DB
$db = App::getContainer()->resolve('database');
// ERRORS
$errors = [];
// CHECK QUERY
$sql_email = "SELECT * FROM users WHERE email = :email";
$sql_username = "SELECT * FROM users WHERE username = :username";
// CHECK
$sql_email_check = $db->queryOne($sql_email, ['email' => $email]);
$sql_username_check = $db->queryOne($sql_username, ['username' => $username]);
//
if ($sql_email_check) {
    $errors['email'] = 'Email already exists!';
    view('register.view.php', ['errors' => $errors]);
    exit();
}
if ($sql_username_check) {
    $errors['username'] = 'Username already exists!';
    view('register.view.php', ['errors' => $errors]);
    exit();
}
// CREATED
$sql_create = "INSERT INTO users (email, username, password) VALUES (:email, :username, :password)";

$db->create($sql_create, ['email' => $email, 'username' => $username, 'password' => password_hash($password, PASSWORD_BCRYPT)]);
header('location: /');
exit();