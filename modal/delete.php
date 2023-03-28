<?php 


$name = $_POST['name'] ?? '';

$SQL = " SELECT * FROM todo";

$result = $conn->query($SQL);

if ($num = mysqli_num_rows($result) > 0) {
    for ($loop = 0; $loop < mysqli_num_rows($result); $loop++) {

        $text = $result->fetch_assoc();
        $dName = $text['todo_Name'];
        $explode = explode(' ', $text['todo_Name']);
        $id = "delete" . end($explode);

        print "<div class='modal fade' id='" . $id . "'>
                    <div class='modal-dialog'>
                        <div class='modal-content'>
                            <div class='modal-header'>
                                <div class='modal-title'>Modal 3</div>
                            </div>
                            <div class='modal-body'>
                                <form action='backend/delete_db.php' method='post'>
                                    <div class='form-group'>
                                        <h3 class='modal-title text-center mb-3'>Are you sure</h3>
                                        <input hidden value='" . $dName . "' name='dname'>
                                        <button type='submit' class='btn btn-danger' value='create'>DELETE</button>
                                        <button 
                                            type='button' 
                                            data-bs-dismiss='modal'
                                            class='btn btn-primary float-end'
                                        >Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>";

    }
}
?>