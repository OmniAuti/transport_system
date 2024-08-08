<?php

function dd($val) {
    var_dump($val);
    die();
}

function base_path($path) {
    return BASE_PATH . $path;
}

function view($path, $attributes = []) {
    extract($attributes);
    require base_path('views/'.$path);
}

function login_user($user) {
    $_SESSION['user'] = ['username' => $user['username']];
    session_regenerate_id();
}

function logout() {
    session_destroy();
    $_SESSION = [];
    $params = session_get_cookie_params();
    setcookie('PHPSESSID', '', time() - 2400, $params['path']);
}