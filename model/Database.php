<?php

class Database
{

    public $connection;
    public $statement;

    public function __construct($config)
    {
        $dsn = 'mysql:' . http_build_query($config, "", ";");

        $this->connection = new PDO($dsn, 'root', '');
        // [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]
    }

    public function query($query)
    {
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute();

        return $this;
    }

    public function fetch()
    {
        return $this->statement->fetch(PDO::FETCH_ASSOC);
    }

    public function fetchAll()
    {
        return $this->statement->fetchALl(PDO::FETCH_ASSOC);
    }

    public function post()
    {
        
    }

}