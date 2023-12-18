<?php

namespace src\Repository;
require __DIR__ . "/../../../vendor/autoload.php";

use src\database\Connecting as ConnectTrait;

interface UserRepository
{
    public  function getLogin(): \PDO;



}