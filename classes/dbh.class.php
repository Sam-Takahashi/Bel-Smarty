<?php


class Dbh
{
    private $host = "localhost";
    private $user = "root";
    private $port = "3307";
    private $pwd = "";
    private $dbName = "belrecipe";

    public function connect()
    {
        $dsn = 'mysql:host=' . $this->host . ';port=' . $this->port . ';dbname=' . $this->dbName . ';charset=UTF8';
        $pdo = new PDO($dsn, $this->user, $this->pwd, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}

// assign to smarty
