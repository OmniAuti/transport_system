<?php

class Database {
    public $connection;
    public $statement;

    public function __construct($config, $user = 'root', $password = '') {
        $dsn = 'mysql:'.http_build_query($config, '', ';');
        return $this->connection = new PDO($dsn, $user, $password, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }

    public function queryAll($query, $params = []) {
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);
        return $this->statement->fetchAll();
    }
    public function queryOne($query, $params = []) {
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);
        return $this->statement->fetch();
    }
    public function create($query, $params = []) {
        $this->statement = $this->connection->prepare($query);
        return $this->statement->execute($params);
    }
    public function post($query, $params = []) {
        $this->statement = $this->connection->prepare($query);
        return $this->statement->execute($params);
    }
    public function put($query, $params = []) {
        $this->statement = $this->connection->prepare($query);
        return $this->statement->execute($params);
    }
    public function delete($query, $params = []) {
        $this->statement = $this->connection->prepare($query);
        return $this->statement->execute($params);
    }
}