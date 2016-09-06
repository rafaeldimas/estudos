<?php

namespace Core\Database;

use Slim\Exception\SlimException;

class Database
{
    private $connection;
    private $erro;

    public function __construct(array $configs)
    {
        if (!isset($this->connection) && is_null($this->connection)){
            try{
                return $this->connection = new \PDO('mysql:host=localhost;dbname='.$configs['db'], $configs['usuario'], $configs['senha']);
            } catch (\PDOException $e){
                return $this->erro = "Erro: ".$e->getMessage().".<br> Entre em contato com o Administrador.";
            }
        }

        return $this->connection;
    }

    public function getErro(){
        return $this->erro;
    }

    /**
     * @return \PDO
     */
    public function getConnection(): \PDO
    {
        return $this->connection;
    }
}