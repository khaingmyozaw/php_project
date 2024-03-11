<?php

namespace Libs\Database;

use PDOException;


class UsersTable {
    private $db;

    public function __construct(MySQl $mysql)
    {
        $this->db = $mysql->connect();
    }


    // function for inserting data to database
    public function insert($data)
    {
        try{
            $statement = $this->db->prepare(
                "INSERT INTO users (name,email,phone,address,password,created_at)
                VALUES (:name,:email,:phone,:address,:password,NOW())
                ");
            $statement->execute($data);
            return $this->db->lastInsertId();
        }catch (PDOException $e){
            echo $e->getMessage();
            exit();
        }
    }

    // To find whether user is exited before, if exited login
    public function find($email, $password)
    {
        try {
            $statement = $this->db->prepare("SELECT * FROM users WHERE email=:email AND password=:password");
            $statement->execute(["email"=>$email, "password"=>$password]);
            $user = $statement->fetch();

            return $user;
        }catch(PDOException $e) {
            echo $e->getMessage();
            exit();
        }
    }

    // To upload profile picture to database
    public function uploadProfile($id, $photo)
    {
        try {
            $statement = $this->db->prepare("UPDATE users SET photo=:photo WHERE id=:id");
        $statement->execute([
            "id" => $id,
            "photo" => $photo
        ]);
        return $statement->rowCount();
        }catch (PDOException $e) {
            echo $e->getMessage();
            exit();
        }
    }
}