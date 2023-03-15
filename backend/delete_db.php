<?php

require_once('../server/connect.php');

$Name=$_POST['dname']??'';

if (!$conn) {
    print 'connection failed due to: ' . $conn->error;
}

$SQL = "DELETE  FROM todo WHERE todo_Name='$Name'";

if ($conn->query($SQL) === true) {

    header('Location: ../index.php');

} else {

    print "failed";
}

?>