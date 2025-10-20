<?php
require "Core/Validator.php";

$config = require "config.php";
$db = new Database($config['database']);

$heading = "Create Note";

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $errors = [];
    /*
    if(strlen($_POST['body']) === 0){
        $errors['body'] = 'A body is required';
    }
    if(strlen($_POST['body']) > 10){
        $errors['body'] = "Body content can't be greater then 100.";
    }
    */

    if(!Validator::string($_POST['body'], 1, 10)){
        $errors['body'] = "Body content can't be greater then 100.";
    }
    if(empty($errors)){
        $db->queries("INSERT INTO `Notes` (`BODY`, `User`) VALUES (:body, :user)", [
        'body' => $_POST['body'],
        'user' => 1
    ]);
    header('Location: /notes');
    }
}

require "Views/Notes/create-view.php";