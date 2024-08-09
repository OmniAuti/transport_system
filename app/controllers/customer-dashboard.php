<?php
    view('partials/header.partial.php', ['title' => 'Home']);
?>
    <h1>Home</h1>
    <?php
    if (isset($_SESSION['customer']['name'])) {
        echo($_SESSION['customer']['name']);
    }
    ?>
    <p>Pickups Needed</p>
    <ul>
        <?php
            foreach ($schedules as $schedule):
                $pickup = $schedule['pickup_time'];
                $t = strpos($pickup, 'T') + 1;
                $pickup_time = substr($pickup, $t, strlen($pickup));
                $pickup_date = substr($pickup, 0, $t - 1);
                // CREATE A PICK UP AND DROP OF SCHEDULE FOR PACKAGES
                // NEED SCREEN FOR PICKUPS AND DROP OFFS
                // ADMIN ASSIGNS DRIVERS
                // DRIVERS COULD BE ASSIGNED RANDOMLY BASED ON AVAILABILITY
                // BLOCK OUT TIMES WHERE THERE IS NO AVAILABILITY
        ?>

                <li><a href="schedule?pi=<?= $schedule['schedule_id'] ?>"><?= $pickup_date ?> at <?= $pickup_time ?></a></li>

        <?php
            endforeach;
        ?>
    </ul>
    <p>Dropoffs needed</p>
    <ul>
        <?php
            foreach ($schedules as $schedule):

                $dropoff = $schedule['dropoff_time'];
                $t = strpos($dropoff, 'T') + 1;
                $dropoff_time = substr($dropoff, $t, strlen($dropoff));
                $dropoff_date = substr($dropoff, 0, $t - 1);
                // CREATE A PICK UP AND DROP OF SCHEDULE FOR PACKAGES
                // NEED SCREEN FOR PICKUPS AND DROP OFFS
                // ADMIN ASSIGNS DRIVERS
                // DRIVERS COULD BE ASSIGNED RANDOMLY BASED ON AVAILABILITY
                // BLOCK OUT TIMES WHERE THERE IS NO AVAILABILITY
        ?>
                <li><a href="schedule?di=<?= $schedule['schedule_id'] ?>"><?= $dropoff_date ?> at <?= $dropoff_time ?></a></li>
        <?php
            endforeach;
        ?>
    </ul>
</body>
</html>