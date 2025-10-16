<?php
require "Database.php";
$heading = "Notes";


$notes = $db -> queries("select * from Notes where user = 1") -> fetchAll();

require "Views/notes-view.php";

//dd($notes);