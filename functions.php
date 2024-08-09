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

function login_customer($customer) {
    $_SESSION['customer'] = ['name' => $customer['name'], 'email' => $customer['email'], 'id' => $customer['id']];
    session_regenerate_id();
}
function login_employee($employee) {
    $_SESSION['employee'] = ['name' => $employee['name'], 'email' => $employee['email'], 'id' => $employee['id'], 'position' => $employee['position']];
    session_regenerate_id();
}

function logout() {
    session_destroy();
    $_SESSION = [];
    $params = session_get_cookie_params();
    setcookie('PHPSESSID', '', time() - 2400, $params['path']);
}