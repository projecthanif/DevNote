<?php

namespace Data;
use PDO;
use PDOException;

class Database
{

    public $connection;
    public $statement;

    public function __construct($config)
    {
        $dsn = 'mysql:' . http_build_query($config, "", ";");

        try {
            $this->connection = new PDO($dsn, 'root', '');
            // [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]
        } catch (PDOException $e) {
           echo "Connection failed due to: " . $e->getMessage() . " on line " . $e->getLine();
        }
    }

    public function query($query, $param = null)
    {
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($param);

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

}