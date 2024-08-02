<?php

class Database {
    public $connection;
    public $statement;


    public function __construct($config, $user = 'root', $password = '') {

        $dsn = 'mysql:'.http_build_query($config, '', ';');

        return $this->connection = new PDO($dsn, $user, $password, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }

    public function create($query, $params = []) {
        $this->statement = $this->connection->prepare($query);
        return $this->statement->execute($params);
    }
}