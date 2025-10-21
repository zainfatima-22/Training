<?php

const BASE_PATH = __DIR__ . '/../';
require __DIR__ . '/../Core/Routing.php'; // Adjust path as needed

session_start();
require BASE_PATH ."Core/functions.php";
require base_path("Core/Database.php");
require base_path("Core/Response.php");

$router = new Routing();

$routes = require base_path("routes.php");   
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = isset($_POST['_method']) ? $_POST['_method'] : $_SERVER['REQUEST_METHOD'];

$router -> route($uri, $method);
