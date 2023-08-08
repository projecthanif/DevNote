<?php

use Data\Database;

require 'model/Database.php';
require 'controllers/create.php';
require 'controllers/delete.php';


// dd($select);

/**
 * Recieve database configuration
 */

$config = (require 'model/config.php');

/**
 * An object of the Database Class
 */
$database = new Database($config['database']);

/**
 *  $select: send a query to select all the data in the database
 */
$select = $database->query("Select * from todo")->fetchAll();

/**
 * $heading - Header title
 */

$heading = "All Your Todo's";

require 'views/all.view.php';