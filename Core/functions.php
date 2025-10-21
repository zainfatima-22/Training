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

function base_path($path){
    return BASE_PATH . $path;
}

function view($path, $attributes=[]){
    extract($attributes);
    require base_path('Views/' . $path);
}