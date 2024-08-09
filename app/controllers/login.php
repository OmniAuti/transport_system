<?php
use Core\App;

$email = $_POST['login_email'];
$password = $_POST['login_password'];
// DB
$db = App::getContainer()->resolve('database');

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
// Login
if (!password_verify($password, $user['password'])) {
    $errors['password'] = 'Password is incorrect!';
    view('login.view.php', ['errors' => $errors]);
    exit();
}
//
login_user($user);
header('location: /home-user.view.php');
exit();