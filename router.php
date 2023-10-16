<?php
$base_url = '/php2023/php_for_beginners/';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

function routeToController($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort(404);
    }
}

$routes = require('routes.php');

routeToController($uri, $routes);
