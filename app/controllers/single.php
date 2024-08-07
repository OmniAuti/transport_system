<?php
use Core\App;
$db = App::getContainer()->resolve('database');
$result;
$header;

if (isset($_GET['pi'])) {
    $sql = "SELECT * FROM schedule WHERE schedule_id = :id";    
    $result = $db->queryOne($sql, ['id' => $_GET['pi']]);
    $schedule = $result['pickup_time'];
    $header = "Pickup";
} else if (isset($_GET['di'])) {
    $sql = "SELECT * FROM schedule WHERE schedule_id = :id";    
    $result = $db->queryOne($sql, ['id' => $_GET['di']]);
    $schedule = $result['dropoff_time'];
    $header = "Dropoff";
}

$user = $db->queryOne('SELECT * FROM users WHERE userID = :userID', ['userID' => $result['userID']]);

view('single.view.php', ['schedule' => $schedule, 'header' => $header, 'user' => $user]);
exit();