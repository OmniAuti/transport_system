<?php

namespace Core;

class Container {
    public $container = [];

    public function bind($key, $func) {
        $this->container[$key] = $func;  
    }

    public function resolve($key) {
        if (array_key_exists($key, $this->container)) {
            call_user_func($this->container[$key]);
        }
    }
}