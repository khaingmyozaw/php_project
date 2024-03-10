<?php

namespace Libs\Database;
use PDO;
use PDOException;

class MySQl {
    private $db;
    private $dbhost;
    private $dbname;
    private $dbuser;
    private $dbpass;

    // while calling object, arguments are optional
    public function __construct(
        $dbhost = "localhost",
        $dbuser = "root",
        $dbpass = "",
        $dbname = "php_project",
    ) {
        $this->dbhost = $dbhost;
        $this->dbname = $dbname;
        $this->dbuser = $dbuser;
        $this->dbpass = $dbpass;
    }

    // connection to database
    public function connect()
    {
        try{
            $this->db = new PDO(
                "mysql:dbhost=$this->dbhost;dbname=$this->dbname",
                "$this->dbuser",
                "$this->dbpass",
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
                ]
            );
            return $this->db;
        }catch(PDOException $e) {
            echo $e->getMessage();
            exit();
        }
    }
}