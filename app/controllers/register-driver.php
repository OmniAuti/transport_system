<?php

use Core\App;

$email = $_POST['register_email'];
$name = $_POST['register_name'];
$password = $_POST['register_password'];
// DB
$db = App::getContainer()->resolve('database');
// ERRORS
$errors = [];
// CHECK QUERY
$sql_email = "SELECT * FROM employees WHERE email = :email";
// CHECK
$sql_email_check = $db->queryOne($sql_email, ['email' => $email]);
//
if ($sql_email_check) {
    $errors['email'] = 'Email already exists!';
    view('register.view.php', ['errors' => $errors]);
    exit();
}
// CREATED
$sql_create = "INSERT INTO employees (email, name, password) VALUES (:email, :name, :password)";

$db->create($sql_create, ['email' => $email, 'name' => $name, 'password' => password_hash($password, PASSWORD_BCRYPT)]);
header('location: /');
exit();