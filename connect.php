<?php

define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
// define("DATABASENAME", );

$conn = mysqli_connect(HOSTNAME,USERNAME,PASSWORD);

if(!$conn){
    die("Database failed due to: " . $conn->error);
}