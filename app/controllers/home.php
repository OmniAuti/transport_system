<?php

use Core\App;

$db = App::getContainer()->resolve('database');
if (isset($_SESSION['customer'])) {
    echo 'customer';
    dd($_SESSION['customer']);
} else if (isset($_SESSION['employee'])) {
    echo 'employee';
    dd($_SESSION['employee']);
} else if (empty($_SESSION)) {
    dd('empty');
}

$sql = "SELECT * FROM schedule";
$results = $db->queryAll($sql);

view('home.view.php', ['schedules' => $results]);
exit();
