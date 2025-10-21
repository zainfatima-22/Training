<?php
require base_path("Core/Validator.php");
$config = require base_path("config.php");
$db = new Database($config['database']);
$heading = "Create Notes";
$errors = [];
if($_SERVER['REQUEST_METHOD'] === 'POST'){
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

view("Notes/create-view.php",[
   'heading' => 'Create Notes',
   'errors' => $errors
]);