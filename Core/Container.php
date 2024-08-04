<?php

namespace Core;

class Container {
    public $bindings = [];

    public function bind($key, $func) {
        $this->bindings[$key] = $func;  
    }

    public function resolve($key) {

        if (!array_key_exists($key, $this->bindings)) {
            throw new Exception("No matching key: {$key}");
        }

            return call_user_func($this->bindings[$key]);

    }
}