<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$routes = require base_path("routes.php");

function routing($uri, $routes){
    if (array_key_exists($uri, $routes)){
        require base_path($routes[$uri]);
    }else{
        require base_path('Views/404.php');
    }
}
routing($uri, $routes);

function abort($code = 404){
    http_response_code($code);
    require base_path("Views/{$code}.php");
    die();
}