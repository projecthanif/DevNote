<?php

$config = (require 'model/config.php');
require 'model/Database.php';

$heading = "All Your Todo's";

$database = new Database($config['database']);

$select = $database->query("Select * from todo")->fetchAll();

// dd($select['TITLE']);



require 'views/all.view.php';