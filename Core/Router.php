<?php

namespace Core;

class Router {
    public $routes = [];

    public function get($uri, $controller) {
        return $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => "GET",
        ];
    }

    public function post($uri, $controller) {
        return $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => "POST",
        ];
    }

    public function route($uri, $method) {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) { 
                require $route['controller'];
            }
        }
    }
}