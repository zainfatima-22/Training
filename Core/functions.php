<?php

function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function url($value){
    echo $_SERVER['REQUEST_URI'] === $value ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white';
}

function authorize($condition, $code = Response::FORBIDDEN){
        if (!$condition){
            abort($code);
        }
}

function abort($code = 404){
    http_response_code($code);
    require base_path("Views/{$code}.php");
    die();
}

function base_path($path){
    return BASE_PATH . $path;
}

function view($path, $attributes=[]){
    extract($attributes);
    require base_path('Views/' . $path);
}

function login($user){
    $_SESSION['user'] = [
        'email' => $user['email']
    ];
    session_regenerate_id(true);
}

function logout(){
    $_SESSION = [];

    session_destroy();
    $params = session_get_cookie_params();
    setcookie('PHPSESSID', '', time() - 3600, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
}