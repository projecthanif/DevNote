<?php

class Route
{
    function router($url, $path)
    {
        if (array_key_exists($url, $path)) {
            return $path[$url];
        } else {
            http_response_code(404);
            // dd(router($url, $path));
            return '404.php';
            // echo false;
        }
    }
}


$path = require('routes.php');



$url = parse_url($_SERVER["REQUEST_URI"])["path"];


$route = new Route();

$routePath = $route-> router($url,$path);
