<?php
    view('partials/header.partial.php', ['title' => 'Home']);
?>
<body>
    <h1>Home</h1>
    <?php
    if (isset($_SESSION['user']['username'])) {
        echo($_SESSION['user']['username']);
    }
    ?>
    
</body>
</html>