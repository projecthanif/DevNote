<?php

class Database{
    
    public $connection;
    public function __construct($config){


        $dsn ='mysql:' . http_build_query($config, "", ";");
        $this->connection = new PDO($dsn, 'root', '');
    }
    
    public function query($query)
    {
        $select = $this->connection->prepare($query);
        $select->execute();

        return $select->fetch(PDO::FETCH_ASSOC);
    }
}

