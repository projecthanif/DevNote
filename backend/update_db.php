<?php

require_once('../server/connect.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
    
$titleName = $_POST['title'] ?? '';
$time = $_POST['time'] ?? '';
$type = $_POST['type'] ?? '';
$mssg = $_POST['message'] ?? '';



if (!$conn) {
    print 'connection failed due to: ' . $conn->error;
}

$SQL = "UPDATE todo
        SET todo_Mssg='$mssg', todo_DATE='$time', todo_title='$type'
         WHERE todo_Name='$titleName'
        ";

if ($conn->query($SQL) === true) {

    header('Location: ../index.php');

} else {

    print "failed";
}

}
header('Location: ../index.php');

?>