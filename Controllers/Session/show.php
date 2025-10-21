<?php

require base_path("Core/Validator.php");
$config = require base_path("config.php");
$db = new Database($config['database']);

$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];
if (!Validator::validateEmail($email)){
    $errors['email'] = "Please provide a valid email address";
}
if (!Validator::string($password, 4, 255)){
    $errors['password'] = "Password should be of correct length";
}
if(!empty($errors)) {
    return view('Session/create-view.php', [
        'heading' => "User Login",
        'errors' => $errors
    ]);
}

$user = $db -> queries('select * from users where email=:email' ,[
    'email' => $email
]) -> find();

if($user){
    if (password_verify($password, $user['Password'])){
        login([
            'email' => $email
        ]);
        header('Location: /');
        exit();   
}

}

return view('Session/create-view.php', [
    'heading' => "User Login",
    'errors' => [
    'email' => "No matching account found for this password. Please try again!"
    ]
]); 


