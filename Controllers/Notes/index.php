<?php
require "Core/Validator.php";
$config = require "config.php";
$db = new Database($config['database']);
$heading = "Notes";


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

require "Views/Notes/index-view.php";

