<?php

namespace App\Db;

use \PDO;
use PDOException;

class Database
{
    const HOST = 'localhost';
    const DBNAME = 'projetos';
    const USER = 'root';
    const PASS = 'VcA01289200';

    /**
     * Nome da tabela para ser manipulada
     * @var string
     */
    private $table;

    /**
     * Instancia de conexão com o banco de dados
     * @var PDO
     */
    private $connection;

    /**
     * Define a tabela e instancia a conexão
     * @param string $table
     */
    public function __construct($table = null)
    {
        $this->table = $table;
        $this->setConnection();
    }

    /**
     * Método responsável por criar uma conexão com o banco de dados
     */
    private function setConnection()
    {
        try {
            $this->connection = new PDO("mysql:host=".self::HOST.";dbname=".self::DBNAME,self::USER,self::PASS);   
            $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);         
        } catch (PDOException $e) {
            die('ERROR: '.$e->getMessage());
        }
    }

}
