<?php

class Dbh
{
    private $host = "localhost";
    private $user = "root";
    private $port = "3307";
    private $pwd = "";
    private $dbName = "bel-recipe";

    public function connect() {
        $dsn = 'mysql:host=' . $this->host . ';port=' . $this->port . ';dbname=' . $this->dbName;
        $pdo = new PDO($dsn, $this->user, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}
