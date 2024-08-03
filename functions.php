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
