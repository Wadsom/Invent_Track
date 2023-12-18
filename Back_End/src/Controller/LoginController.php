<?php
namespace src\Controller;
require __DIR__ . "/../../../vendor/autoload.php";

use Couchbase\User;
use src\Entity\UsuarioEntity as UserEntity;
use src\Serv\LoginService as LoginUser;
class LoginController
{
    private LoginUser $loginServ;
    private UserEntity $user;
    public function loginController(string $email, string $password){
      try{
         $user = $this->loginServ->logando($email,$password);
      }
     catch (\PDOException $e){
          return throw new \PDOException($e);
     }

}



}