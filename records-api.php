<?php
header("Access-Control-Allow-Origin: * ");
header("Access-Control-Allow-Method: GET ");
header("Content-type: application/json; charset=UTF-8");



include_once('server/connect.php');

$SQL = "SELECT * FROM todo";

$result = $conn->query($SQL); 

while($row = $result->fetch_assoc()){
    // print "<pre>";
$todo = array(
    
    'id' => $row['id'],
    'name' => $row['todo_Name'],
    'message' => $row['todo_Mssg'],
);
     
http_response_code(200);

echo json_encode(array(
    'status'=>'success',
    'message'=>$todo
));

}  






?>