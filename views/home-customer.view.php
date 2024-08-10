<?php
    view('partials/header.partial.php', ['title' => 'Home']);
?>
<body>
    <h1>Customer Home</h1>
    <?php
        if (isset($_SESSION['customer']['name'])) {
    
            echo('Hello, '.$_SESSION['customer']['name'].'. Here are your orders.');
        }
        // NEEDS CLIENTS REQUESTED PICKUP/DROPOFF BY ID - DRIVER ASSIGNED IF ONE ADDED
        
        foreach($schedule as $item):
            $driver;
            if (!$item['assigned_employee']) {
                $driver = 'Not assigned yet.';
            }
    ?>
    <div>
        <p>Pickup: <?= $item['pickup_time'] ?></p>
        <p>Dropoff: <?= $item['dropoff_time'] ?></p>
        <p>Driver: <?= $driver ?></p>
    </div>

    <?php
        endforeach;
    ?>

</body>
</html>