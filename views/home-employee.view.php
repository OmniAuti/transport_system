<?php
    view('partials/header.partial.php', ['title' => 'Home']);
?>
<body>
    <h1>Home</h1>
    <?php
    if (isset($_SESSION['user']['name'])) {
        echo($_SESSION['user']['name']);
    }

    // NEEDS ASSIGNED PICKUPS/DROPOFFS
    ?>
   
</body>
</html>