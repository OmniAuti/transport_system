<?php
use Core\App;

$email = $_POST['login_email'];
$password = $_POST['login_password'];
// DB
$db = App::getContainer()->resolve('database');
// ERRORS
$errors = [];
// CHECK QUERY
$sql_user_check = "SELECT * FROM employees WHERE email = :email";
// CHECK
$employee = $db->queryOne($sql_user_check, ['email' => $email]);
//
if (!$employee) {
    $errors['email'] = 'Email does not exist!';
    view('login-employee.view.php', ['errors' => $errors]);
    exit();
}
// Login
if (!password_verify($password, $employee['password'])) {
    $errors['password'] = 'Password is incorrect!';
    view('login-employee.view.php', ['errors' => $errors]);
    exit();
}

login_employee($employee);
header('location: /');
exit();