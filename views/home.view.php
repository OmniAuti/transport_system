<?php
    view('partials/header.partial.php', ['title' => 'Home']);
?>
    <h1>Home</h1>
    <ul>
    <?php
        foreach ($schedules as $schedule):

            $pickup = $schedule['pickup_time'];
            $dropoff = $schedule['dropoff_time'];
            $t = strpos($pickup, 'T') + 1;
            $pickup_time = substr($pickup, $t, strlen($pickup));
            $pickup_date = substr($pickup, 0, $t);
            // CREATE A PICK UP AND DROP OF SCHEDULE FOR PACKAGES
            // NEED SCREEN FOR PICKUPS AND DROP OFFS
            // ADMIN ASSIGNS DRIVERS
            // DRIVERS COULD BE ASSIGNED RANDOMLY BASED ON AVAILABILITY
            // BLOCK OUT TIMES WHERE THERE IS NO AVAILABILITY
    ?>

            <li><a href="schedule?id=<?= $schedule['schedule_id'] ?>"><?= $pickup_date ?> at <?= $pickup_time ?></a></li>

    <?php
        endforeach;
    ?>
    </ul>
</body>
</html>