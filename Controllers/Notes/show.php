<?php
$heading = "My Notes App";
$config = require "config.php";
$db = new Database($config['database']);

$id = $_GET['id'];
$notes = $db -> queries("select * from Notes where ID = :id",  [
    'id' => $id
    ])->findOrFail();

authorize($notes['User'] === 1);

require "Views/Notes/show-view.php";

//dd($notes);