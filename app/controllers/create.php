<?php
use Core\App;

$db = App::getContainer()->resolve('database');

$pickup_time = $_POST['pickup'];
$dropoff_time = $_POST['dropoff'];
$userID = $_POST['user'];

$sql = "INSERT INTO schedule (pickup_time, dropoff_time, userID) VALUES (:pickup_time, :dropoff_time, :userID)";

$db->create($sql, ['pickup_time' => $pickup_time, 'dropoff_time' => $dropoff_time, 'userID' => $userID]);

header('location: /');
