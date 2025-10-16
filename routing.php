<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$routes = [
    '/' => 'Controllers/indexx.php',
    '/home' => 'Controllers/indexx.php',
    '/contact' => 'Controllers/contact.php',
    '/projects' => 'Controllers/projects.php',
    '/notes' => 'Controllers/notes.php',
    '/note' => 'Controllers/note.php',
    '/about' => 'Controllers/about.php',
    '/dashboard' => 'Controllers/dashboard.php',
];


function routing($uri, $routes){
    if (array_key_exists($uri, $routes)){
        require $routes[$uri];
    }else{
        require 'Views/404.php';
    }
}
routing($uri, $routes);

function abort($code = 404){
    http_response_code($code);
    require "Views/{$code}.php";
    die();
}