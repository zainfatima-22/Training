<?php
require "Database.php";
$heading = "My Notes App";

$id = $_GET['id'];
$notes = $db -> queries("select * from Notes where ID = :id",  ['id' => $id]) -> fetchAll();
require "Views/notes-view.php";

//dd($notes);