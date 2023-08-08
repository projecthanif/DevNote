<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['delete'])) {
        require 'model/Delete.php';

        $config = require 'model/config.php';

        $id = $_POST['id'];

        $delete = new Delete($config['database']);

        $delete->query(
            "DELETE FROM todo where id = :id",
            ['id' => $id]
        );

        // dd($id);
    }
}