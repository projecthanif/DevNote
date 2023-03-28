<?php

header("Access-Control-Allow-Origin: * ");
header("Access-Control-Allow-Method: GET ");
header("Content-type: application/json; charset=UTF-8");


$fileName = 'university.json';

$data = file_get_contents($fileName);
$d = json_decode($data);

print_r($d);

// foreach($d as $key => $value){
// echo $key;
// }
// echo json_encode($data);

?>