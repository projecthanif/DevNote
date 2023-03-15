<?php

$SQL = "SELECT todo_Name FROM todo";

$result = $conn->query($SQL);

if (mysqli_num_rows($result) > 0) {

    for ($i = 0; $i < mysqli_num_rows($result); $i++) {

        $out = $result->fetch_assoc();

        $title = $out['todo_Name'];
        $explode = explode(' ', $title);
        $idvalue = "update".end($explode);

        print("
                <div class='card mb-4'>
                    <div class='card-body'>
                            <h5 class='card-text fw-bold'>" . $title . "</h5><br>
                            <input name='name' type='text' hidden value='$title'>
                            <button class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#" . $idvalue . "'>
                                UPDATE
                            </button>
                    </div>
                </div>
            ");
    }
}

// print " ";
?>