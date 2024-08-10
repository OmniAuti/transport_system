<?php
use Core\App;

$db = App::getContainer()->resolve('database');

$pickup_time = $_POST['pickup'];
$dropoff_time = $_POST['dropoff'];
$customer_id = $_POST['customer'];

$sql = "INSERT INTO schedule (pickup_time, dropoff_time, customer_id) VALUES (:pickup_time, :dropoff_time, :customer_id)";

$db->create($sql, ['pickup_time' => $pickup_time, 'dropoff_time' => $dropoff_time, 'customer_id' => $customer_id]);

header('location: /');
exit();
