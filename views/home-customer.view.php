<?php
    view('partials/header.partial.php', ['title' => 'Home']);
?>
<body>
    <h1>Home</h1>
    <?php
    if (isset($_SESSION['customer']['name'])) {
        echo($_SESSION['customer']['name']);
    }
    ?>
    
</body>
</html>