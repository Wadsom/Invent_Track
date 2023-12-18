<?php
require __DIR__ ."/../../../vendor/autoload.php";
use src\database\Connect as DbConnect;

$pdo = DbConnect::getInstance()->prepare('SELECT ');

