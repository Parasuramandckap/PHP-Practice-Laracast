<?php

$config = require "config.php";
$database = new Database($config['database']);


$heading = "note";


$note = $database->query("SELECT * FROM datas WHERE id = :id",["id"=>$_GET["id"]])->fetch();

require "views/note.view.php";