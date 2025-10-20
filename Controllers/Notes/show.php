<?php
// This controller handles viewing (GET) and updating (POST/PATCH) a single note.

require "Core/Validator.php";
$config = require "config.php";
$db = new Database($config['database']);

$heading = "My Notes App";

// --- 1. GET NOTE AND AUTHORIZE ---
$id = $_GET['id'] ?? null;
if (!$id) { abort(404); }

// Fetch the single note
$note = $db->queries("select * from Notes where ID = :id", [
    'id' => $id
])->findOrFail(); 

// Authorization Check (Note: Assumes 'User' is the foreign key for the owner)
authorize($note['User'] === 1); 

// Initialize variables for the view
$errors = [];
$body = $note['BODY']; // Default body is the existing note content

// --- 2. HANDLE POST/UPDATE SUBMISSION ---
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

if ($method === 'POST' || $method === 'PATCH') {
    
    // Use submitted data for the body display, even if there are errors
    $body = trim($_POST['body'] ?? '');
    
    // 2a. Validation
    if (!Validator::string($body, 1, 1000)) {
        $errors['body'] = "The note body is required and must not exceed 1000 characters.";
    }

    // 2b. Execute Update
    if (empty($errors)) {
        $db->queries("UPDATE `Notes` SET `BODY` = :body WHERE `ID` = :id", [
            'body' => $body,
            'id' => $note['ID']
        ]);
        
        // Update the $note array immediately so the refreshed view shows the new text
        $note['BODY'] = $body; 

        // Redirect back to the clean detail view (PRG Pattern)
        header("Location: /note?id={$note['ID']}");
        exit();
    }
}
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

// Pass variables needed for the view to render (either static or editable)
require "Views/Notes/show-view.php";
