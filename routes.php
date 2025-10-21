<?php

/* return [
    '/' => 'Controllers/indexx.php',
    '/home' => 'Controllers/indexx.php',
    '/contact' => 'Controllers/contact.php',
    '/projects' => 'Controllers/projects.php',
    '/notes' => 'Controllers/Notes/index.php',
    '/notes/create' => 'Controllers/Notes/create.php',
    '/note' => 'Controllers/Notes/show.php',
    '/about' => 'Controllers/about.php',
    '/dashboard' => 'Controllers/dashboard.php',
    '/register' => 'Controllers/Registration/create.php',
    '/show' => 'Controllers/Registration/show.php'
];
 */

$router -> get('/', 'Controllers/indexx.php');
$router -> get('/home', 'Controllers/indexx.php');
$router -> get('/dashboard', 'Controllers/dashboard.php');
$router -> get('/projects', 'Controllers/projects.php');
$router -> get('/about', 'Controllers/about.php');
$router -> get('/contact', 'Controllers/contact.php');

$router -> get('/notes', 'Controllers/Notes/index.php')->only('auth');
$router -> get('/notes/create', 'Controllers/Notes/create.php');
$router -> get('/note', 'Controllers/Notes/show.php');

$router -> get('/register', 'Controllers/Registration/create.php')->only('guest');
$router -> post('/register', 'Controllers/Registration/show.php');

$router -> get('/login', 'Controllers/Session/create.php')->only('guest');
$router -> post('/sessions', 'Controllers/Session/show.php')->only('guest');
$router -> delete('/session', 'Controllers/Session/destroy.php')->only('auth');


