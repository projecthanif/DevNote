<?php

class Database{
    public $value;
    function __construct($value){
        $this->value = $value;
        $dsn = http_build_query($value);
    }
    
}