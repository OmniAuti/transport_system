<?php
use Core\App;
$db = App::getContainer()->resolve('database');
$result;
$header;

if (isset($_GET['pi'])) {
    $sql = "SELECT pickup_time FROM schedule WHERE schedule_id = :id";    
    $result = $db->queryOne($sql, ['id' => $_GET['pi']]);
    $schedule = $result['pickup_time'];
    $header = "Pickup";
} else if (isset($_GET['di'])) {
    $sql = "SELECT dropoff_time FROM schedule WHERE schedule_id = :id";    
    $result = $db->queryOne($sql, ['id' => $_GET['di']]);
    $schedule = $result['dropoff_time'];
    $header = "Dropoff";
}

view('single.view.php', ['schedule' => $schedule, 'header' => $header]);
exit();