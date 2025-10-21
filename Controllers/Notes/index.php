<?php

$_SESSION['name'] = 'Zain Fatima';

require base_path("Core/Validator.php");
$config = require base_path("config.php");
$db = new Database($config['database']);


$notes = $db -> queries("select * from Notes where user = 1") -> get();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
   if (($_POST['_method'] ?? '') === 'DELETE'){
    $id = $_POST['id'] ?? null;
    $db->queries("DELETE FROM `Notes` WHERE ID = :id", [
            'id' => $id
        ]);
        
        // --- Post-Redirect-Get (PRG) ---
        header('Location: /notes');
        exit(); 
   }
}

view("Notes/index-view.php",[
   'heading' => "Notes",
   'notes' => $notes
]);

