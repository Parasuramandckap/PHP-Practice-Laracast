<?php

$config = require "config.php";
$database = new Database($config['database']);


$heading = "notes";

$notes = $database->query("SELECT * FROM datas WHERE id =1")->fetchAll();


require "views/notes.view.php";