<?php
namespace src\Serv;
require __DIR__ ."/../../../vendor/autoload.php";
use src\database\Connect as DbConnect;
use src\Repository\UserRepository as UserRepo;

class LoginService{

    public function logando(string $name, string $password)
    {
     $pdo = DbConnect::getInstance()->prepare("SELECT name,senha FROM usuarios WHERE name= ':name', senha= ':senha'");
     $pdo->bindValue(":name", $name);
     $pdo->bindValue(":senha", $password);
     $pdo->execute();
     $result= $pdo->fetchAll(PDO::FETCH_ASSOC);
     $total_Reg= count($result);
    }





}
