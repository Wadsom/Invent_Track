<?php

namespace src\database;

use PDO;
use PDOException;

class Connect
{

    private const HOST = "127.0.0.1";
    private const USER = "root";
    private const DBNAME = "tb_empresa";
    private const PASSWD = "";
    private const OPTIONS = [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_CASE => PDO::CASE_NATURAL,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,

    ];
    private static $instance;

    /** @return PDO */
    public static function getInstance(): PDO
    {
        if (empty(self::$instance)) {
            try {
                return self::$instance = new PDO(
                    "mysql:host =" . self::HOST . "; dbname=" . self::DBNAME,
                    self::USER, self::PASSWD, self::OPTIONS
                );
            } catch (PDOException $e) {
                return throw new PDOException($e);
            }
        }
        return self::$instance;
    }

}






