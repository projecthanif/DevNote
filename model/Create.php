<?php

use Data\Database;

// require __DIR__ . '/../vendor/autoload.php';
require 'model/Database.php';

class Create extends Database
{

    function __construct($config)
    {
        parent::__construct($config);
    }

    function filter($param)
    {
        $param = stripslashes($param);
        $param = filter_var($param, FILTER_SANITIZE_STRING);
        return $param;
    }

}