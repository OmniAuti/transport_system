<?php
    view('partials/header.partial.php', ['title' => 'Home']);
    $t = strpos($schedule, 'T');
    $date = substr($schedule, 0, $t);
    $time = substr($schedule, $t + 1, strlen($schedule));
?>
<body>
<h1><?= $header ?></h1>

<div>
    <p>Date: <?= $date ?></p>
    <p>Time: <?= $time ?></p>
    <p>Passenger: <?= $user['username'] ?></p>
    <p>Assigned Driver: </p>
</div>