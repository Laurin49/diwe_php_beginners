<?php

function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function urlIs($value): bool {
    return $_SERVER['REQUEST_URI'] === $value;
}

function abort($code = 404): void {
    http_response_code(404);
    require "views/{$code}.php";
    die();
}

function routeToController($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort(404);
    }
}