<?php
require_once('server/connect.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Todo list</title>
</head>

<body class="bg-light">
    <style>
        a {
            text-decoration: none;
        }

        body {
            font-family: monospace;
        }
    </style>
    <nav class="navbar-nav navbar-expand-sm p-2">
        <ul class="navbar-nav nav-tabs nav-justified">
            <li class="nav-item">
                <a href="#" class="nav-link active">Home</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Today</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Work</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Important</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Errands</a>
            </li>
        </ul>
    </nav>
    <div class="container-fuild p-3 my-5">
        <div class="card p-3">
            <h3 class="text-center fw-bold">TO DO</h3>

            <div class="table-group-divider mb-2"></div>

            <div class="card-body">

                <ul class="list-group list-group-horizontal-lg w-auto mt-3">

                    <!------------- Create----------------->

                    <!-------------------- modal button for create--------------------->
                    <li class="list-group-item list-group-item-action text-center">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
                            C - CREATE
                        </button>
                    </li>

                    <!---------------modal for create ------------------->

                    <div class="modal" id="create">
                        <div class="modal-dialog bg-light ">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="fw-bold">CREATE YOUR LIST OF Work</h3>
                                </div>
                                <div class="modal-body p-5">
                                    <form action="backend/data_receiver.php" method="post">
                                        <div class="form-group">
                                            <label for="title">Title
                                                <input type="text" name="title" id="" class="form-control" required>
                                            </label>
                                            <label for="time">Time
                                                <input type="date" name="time" id="" class="form-control">
                                            </label>
                                            <label for="type">Type
                                                <select name="type" id="type" class="form-select">
                                                    <option value="">Select</option>
                                                    <option value="important">Important</option>
                                                    <option value="work">Work</option>
                                                    <option value="errands">Errands</option>
                                                </select>
                                            </label>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="message">message</label>
                                            <textarea name="message" id="" cols="30" rows="10" class="form-control">
                                            </textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary" value="create">Create</button>
                                        <button type="button" class="btn btn-danger float-end"
                                            data-bs-dismiss="modal">Cancel</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!------------- Read----------------->

                    <!-------------------- modal button for read--------------------->

                    <li class="list-group-item list-group-item-action text-center">
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#read">
                            R - READ
                        </button>
                    </li>
                    <!--------------- modal for read ------------------->

                    <div class="modal fade modal-fullscreen-lg-down" id="read">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <div class="modal-title fw-bold">READ</div>
                                    <button class="btn btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="card p-3">
                                    <div class="card-body p-3">
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <h5 class="card-text fw-bold">
                                                    Important
                                                </h5><br>
                                                <button class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#text1">
                                                    Read</button>
                                            </div>
                                        </div>
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <h5 class="card-text fw-bold">
                                                    Review
                                                </h5><br>
                                                <button class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#text2">
                                                    Read</button>
                                            </div>
                                        </div>
                                        <?php //include('backend/read_list.php'); 
                                        
                                        $SQL = "SELECT todo_Name FROM todo";

                                        $result = $conn->query($SQL);

                                        if (mysqli_num_rows($result) > 0) {

                                            for ($i = 0; $i < mysqli_num_rows($result); $i++) {

                                                $out = $result->fetch_assoc();

                                                $title = $out['todo_Name'];
                                                $explode = explode(' ', $title);
                                                $idvalue = "read" . end($explode);

                                                print("
                <div class='card mb-4'>
                    <div class='card-body'>
                            <h5 class='card-text fw-bold'>" . $title . "</h5><br>
                            <input name='name' type='text' hidden value='$title'>
                            <button class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#" . $idvalue . "'>
                                Read
                            </button>
                    </div>
                </div>
            ");
                                            }
                                        }


                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--------------------modal two------------------>
                    <div class="modal fade" id="text1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <div class="modal-title" id="read2">Modal 2</div>
                                </div>
                                <div class="modal-body">
                                    <h4 class="modal-title fw-bold text-center">Work on
                                        perfecting the
                                        remaining work</h4>
                                    <p class="card-text">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        Quia delectus reprehenderit nemo, impedit ducimus officia
                                        officiis,
                                        esse possimus laudantium expedita vero? Quisquam, quam
                                        asperiores.
                                        Pariatur totam repudiandae facilis distinctio omnis!
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-warning" data-bs-toggle="modal"
                                        data-bs-dismiss="modal">back</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="text2">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <div class="modal-title" id="read2">Modal 2</div>
                                </div>
                                <div class="modal-body">
                                    <h4 class="modal-title fw-bold text-center">Work on
                                        perfecting the
                                        remaining work</h4>
                                    <p class="card-text">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        Quia delectus reprehenderit nemo, impedit ducimus officia
                                        officiis,
                                        esse possimus laudantium expedita vero? Quisquam, quam
                                        asperiores.
                                        Pariatur totam repudiandae facilis distinctio omnis!
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-warning" data-bs-toggle="modal"
                                        data-bs-dismiss="modal">back</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php //include('backend/read.php') 
                    $name = $_POST['name'] ?? '';

                    $SQL = " SELECT * FROM todo";

                    $result = $conn->query($SQL);

                    if ($num = mysqli_num_rows($result) > 0) {
                        for ($loop = 0; $loop < mysqli_num_rows($result); $loop++) {

                            $text = $result->fetch_assoc();

                            $explode = explode(' ', $text['todo_Name']);
                            $id = "read" . end($explode);

                            print "<div class='modal fade' id='" . $id . "'>
                                        <div class='modal-dialog'>
                                            <div class='modal-content'>
                                                <div class='modal-header'>
                                                     <div class='modal-title'>Modal 3</div>
                                                </div>
                                                <div class='modal-body'>
                                                    <h4 class='modal-title fw-bold text-center'>" . $text['todo_Name'] . "</h4>
                                                    <p class='card-text'>" .
                                $text['todo_Mssg'] . "
                                                    </p>
                                                </div>
                                                <div class='modal-footer'>
                                                    <button class='btn btn-warning' data-bs-toggle='modal'
                                                        data-bs-dismiss='modal'> back
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>";
                        }
                    }
                    ?>

                    <!------------- Update----------------->

                    <!-------------------- modal button for update--------------------->
                    <li class="list-group-item list-group-item-action text-center">
                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#update">
                            U - UPDATE
                        </button>
                    </li>

                    <!--------------- modal for update ------------------->

                    <div class="modal modal-fullscreen-lg-down" id="update">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <div class="modal-text fw-bold">UPDATE</div>
                                    <button class="btn btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="card p-3">
                                    <div class="card-body">
                                        <?php //include('backend/update_list.php') 
                                        $SQL = "SELECT todo_Name FROM todo";

                                        $result = $conn->query($SQL);

                                        if (mysqli_num_rows($result) > 0) {

                                            for ($i = 0; $i < mysqli_num_rows($result); $i++) {

                                                $out = $result->fetch_assoc();

                                                $title = $out['todo_Name'];
                                                $explode = explode(' ', $title);
                                                $idvalue = "update" . end($explode);

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

                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php //include('backend/update.php') 
                    $name = $_POST['name'] ?? '';

                    $SQL = " SELECT * FROM todo";

                    $result = $conn->query($SQL);

                    if ($num = mysqli_num_rows($result) > 0) {
                        for ($loop = 0; $loop < mysqli_num_rows($result); $loop++) {

                            $text = $result->fetch_assoc();

                            $explode = explode(' ', $text['todo_Name']);
                            $id = "update" . end($explode);

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
                                                                <input type='text' name='title' value='" . $text['todo_Name'] . "' class='form-control'>
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

                    <!------------- Delete----------------->

                    <!-------------------- modal button for delete--------------------->
                    <li class="list-group-item list-group-item-action text-center">
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete">
                            D - DELETE
                        </button>
                    </li>

                    <!--------------- modal for delete ------------------->

                    <div class="modal modal-fullscreen-lg-down" id="delete">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <div class="modal-title fw-bold">Delete</div>
                                    <button class="btn btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="card p-3">
                                    <div class="card-body">
                                        <?php //include('backend/delete.php') 
                                        
                                        $SQL = "SELECT todo_Name FROM todo";

                                        $result = $conn->query($SQL);

                                        if (mysqli_num_rows($result) > 0) {

                                            for ($i = 0; $i < mysqli_num_rows($result); $i++) {

                                                $out = $result->fetch_assoc();

                                                $title = $out['todo_Name'];
                                                $explode = explode(' ', $title);
                                                $idvalue = "delete" . end($explode);

                                                print("
                <div class='card mb-4'>
                    <div class='card-body'>
                            <h5 class='card-text fw-bold'>" . $title . "</h5><br>
                            <input name='name' type='text' hidden value='$title'>
                            <button class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#" . $idvalue . "'>
                                DELETE
                            </button>
                    </div>
                </div>
            ");
                                            }
                                        }


                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php //include('backend/delete_verification.php') 
                    
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

                </ul>
            </div>
        </div>
    </div>

    <script src="app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>

</html>