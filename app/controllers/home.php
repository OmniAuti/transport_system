<?php

use Core\App;

$db = App::getContainer()->resolve('database');

if (isset($_SESSION['customer'])) {
    $customer_id = $_SESSION['customer']['id'];
    $sql = "SELECT * FROM schedule WHERE customer_id = :customer_id";
    $schedule = $db->queryAll($sql, ['customer_id' => $customer_id]);
    view('home-customer.view.php', ['schedule' => $schedule]);
} else if (isset($_SESSION['employee'])) {
    $id = $_SESSION['employee']['id'];
    $sql = "SELECT * FROM schedule WHERE assigned_employee = :assigned_employee";
    $schedule = $db->queryAll($sql, ['assigned_employee' => $id]);
    view('home-employee.view.php', ['schedule' => $schedule]);
} else if (empty($_SESSION)) {
    dd('empty');
}
exit();
