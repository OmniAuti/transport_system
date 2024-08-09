<?php
use Core\App;

$email = $_POST['login_email'];
$password = $_POST['login_password'];
// DB
$db = App::getContainer()->resolve('database');


// ERRORS
$errors = [];
// CHECK QUERY
$sql_customer_check = "SELECT * FROM customers WHERE email = :email";
// CHECK
$customer = $db->queryOne($sql_customer_check, ['email' => $email]);
//
if (!$customer) {
    $errors['email'] = 'Email does not exist!';
    view('login.view.php', ['errors' => $errors]);
    exit();
}
// Login
if (!password_verify($password, $customer['password'])) {
    $errors['password'] = 'Password is incorrect!';
    view('login.view.php', ['errors' => $errors]);
    exit();
}
//
login_customer($customer);
header('location: /');
exit();