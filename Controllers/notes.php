<?php
$config = require "config.php";
$db = new Database($config['database']);
$heading = "Notes";


$notes = $db -> queries("select * from Notes where user = 1") -> get();

require "Views/notes-view.php";

dd($_POST);
