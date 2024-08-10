<?php
    view('partials/header.partial.php', ['title' => 'Home']);
?>
<body>
    <h1>Employee Home</h1>
    <?php
    if (isset($_SESSION['user']['name'])) {
        echo($_SESSION['user']['name']);
    }

    if (isset($_SESSION['employee']['name'])) {
        echo('Hello, '.$_SESSION['employee']['name'].'. Here are your scheduled jobs.');
    }
    ?>
    <p>Pickups</p>
    <?php
    // NEEDS ASSIGNED PICKUPS/DROPOFFS
    foreach($schedule as $jobs):
        // need to include customer
    ?>
    <div>
        <p><?= $jobs['pickup_time'] ?></p>
    </div>
    <?php
    endforeach;
    ?>
    <p>Dropoffs</p>
    <?php
    // NEEDS ASSIGNED PICKUPS/DROPOFFS
    foreach($schedule as $jobs):
    ?>
    <div>
        <p><?= $jobs['dropoff_time'] ?></p>
    </div>
    <?php
    endforeach;
    ?>
   
</body>
</html>