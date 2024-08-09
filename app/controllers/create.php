<?php
use Core\App;

$db = App::getContainer()->resolve('database');

$pickup_time = $_POST['pickup'];
$dropoff_time = $_POST['dropoff'];
$customerID = $_POST['customer'];

$sql = "INSERT INTO schedule (pickup_time, dropoff_time, customerID) VALUES (:pickup_time, :dropoff_time, :customerID)";

$db->create($sql, ['pickup_time' => $pickup_time, 'dropoff_time' => $dropoff_time, 'customerID' => $customerID]);

header('location: /');
exit();
