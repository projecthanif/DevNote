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
        $id = "update".end($explode);

        print "<div class='modal fade' id='" . $id . "'>
    <div class='modal-dialog'>
        <div class='modal-content'>
            <div class='modal-header'>
                <div class='modal-title'>Modal 3</div>
            </div>
    <div class='modal-body'>
    <form action='backend/update_db.php' method='post'>
    <div class='form-group'>
        <label for='title'>Title
            <input type='text' name='title' value='".$text['todo_Name'] ."' class='form-control'>
        </label>
        <label for='time'>Time
            <input type='date' name='time' id='' class='form-control'>
        </label>
        <label for='type'>Type
            <select name='type' id='type' class='form-select'>
                <option value=''>Select</option>
                <option value='important'>Important</option>
                <option value='work'>Work</option>
                <option value='errands'>Errands</option>
            </select>
        </label>
    </div>
    <div class='form-group mb-3'>
        <label for='message'>message</label>
        <textarea name='message' cols='30' rows='10' class='form-control'>
        </textarea>
    </div>
    <button type='submit' class='btn btn-primary' value='create'>SAVE</button>
    <button type='button' class='btn btn-danger float-end'
        data-bs-dismiss='modal'>Cancel</button>
</form>
                                </div>
                            </div>
                        </div>
                    </div>";
    }
}

?>