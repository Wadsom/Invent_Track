<?php

namespace src\database;
require __DIR__ . "/../../../vendor/autoload.php";
use src\database\Connect as DbConnect;
trait Connecting
{
    public function connect():\PDO
    {
        try {
            $pdo= DbConnect::getInstance();
            return $pdo;
        } catch (\PDOException $e){
            return throw new \PDOException($e);
        }
}
}