<?php
require "Core/Validator.php";

$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];
if (!Validator::validateEmail($email)){
    $errors['email'] = "Please provide a valid email address";
}
if (!Validator::string($password, 7, 255)){
    $errors['password'] = "Password should be of correct length";
}
if(!empty($errors)) {
    dd($errors);
}

require "Views/Registration/create-view.php";
