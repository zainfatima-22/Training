<?php
function dd($value){
    echo "<pre>";
    var_dump([$_SERVER]);
    echo "</pre>";
    die();
}


function url($value){
    echo $_SERVER['REQUEST_URI'] === $value ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white';
}
