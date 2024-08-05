<?php

use Core\App;


$db = App::getContainer()->resolve('database');

$sql = "SELECT * FROM schedule";
$results = $db->queryAll($sql);

view('home.view.php', ['schedules' => $results]);

