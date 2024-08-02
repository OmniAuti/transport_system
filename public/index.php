<?php
    const BASE_PATH = __DIR__ . '/../';
    require BASE_PATH . 'functions.php';

    require('../Core/Database.php');
    $config = require base_path('config.php');
    $db = new Database($config);