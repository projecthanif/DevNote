<?php

require_once('../server/connect.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $titleName = $_POST['title'] ?? '';
    $time = $_POST['time'] ?? '';
    $type = $_POST['type'] ?? '';
    $message = $_POST['message'] ?? '';

    $SQL = "INSERT INTO todo(todo_Name,todo_Mssg,todo_DATE,todo_title)
         value('$titleName','$message','$time','$type');
        --  value(?,?,?,?);
        ";

    $result = $conn->query($SQL);

    // $input=$conn->prepare($SQL);

    // $result=$input->bind_param('ssss',$titleName,$mssg,$time,$type);

    if ($result) {

        header('Location: ../index.php');

    } else {

        print "failed";
    }

}
header('Location: ../index.php');

?>