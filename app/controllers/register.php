<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = $_POST['register_email'];
    $user_name = $_POST['register_user_name'];
    $password = $_POST['register_password'];
    
}