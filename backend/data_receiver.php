<?php

require_once('../server/connect.php');

$titleName=$_POST['title']??'';
$time=$_POST['time']??'';
$type=$_POST['type']??'';
$mssg=$_POST['message']??'';

// print('<pre>');
// print $titleName."</br>";
// print $time."</br>";
// print $type."</br>";
// print $mssg;


if (!$conn) {
    print 'connection failed due to: ' . $conn->error;
} 
    
$SQL = "INSERT INTO todo(todo_Name,todo_Mssg,todo_DATE,todo_title)
         value('$titleName','$mssg','$time','$type');
        -- value(?,?,?,?);
        ";

$result=$conn->query($SQL);

// $input=$conn->prepare($SQL);

// $result=$input->bind_param('ssss',$titleName,$mssg,$time,$type);

if($result){

header('Location: ../index.php');

}else{

print"failed";}

?>