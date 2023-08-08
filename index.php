<?php


require 'function.php';
// require 'Router.php';
// dd($_SERVER);
// require $routePath;

require 'model/Create.php';

$config = require 'model/config.php';

// dd($config);
$create = new Create($config['database']);





?>