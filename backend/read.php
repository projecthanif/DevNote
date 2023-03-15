<?php
// require('read_list.php');
// require_once('server/connect.php');
$name = $_POST['name'] ?? '';

$SQL = " SELECT * FROM todo";

$result = $conn->query($SQL);

if ($num = mysqli_num_rows($result) > 0) {
    for ($loop = 0; $loop < mysqli_num_rows($result); $loop++) {

        $text = $result->fetch_assoc();

        $explode = explode(' ', $text['todo_Name']);
        $id = "read".end($explode);

        print "<div class='modal fade' id='" . $id . "'>
    <div class='modal-dialog'>
        <div class='modal-content'>
            <div class='modal-header'>
                <div class='modal-title'>Modal 3</div>
            </div>
    <div class='modal-body'>
            <h4 class='modal-title fw-bold text-center'>" . $text['todo_Name'] . "</h4>
    <p class='card-text'>" .
            $text['todo_Mssg'] . "</p></div>
        <div class='modal-footer'>
        <button class='btn btn-warning' data-bs-toggle='modal'
                                        data-bs-dismiss='modal'>back</button>
                                </div>
                            </div>
                        </div>
                    </div>";
    }
}

?>