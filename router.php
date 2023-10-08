<?php
$base_url = '/php2023/php_for_beginners/';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    $base_url => 'controllers/index.php',
    $base_url . 'index' => 'controllers/index.php',
    $base_url . 'about' => 'controllers/about.php',
    $base_url . 'contact' => 'controllers/contact.php',
];

routeToController($uri, $routes);