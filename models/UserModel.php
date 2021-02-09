<?php

class User {
    public static function register(
            string  $email, 
            string  $name, 
            string  $surname, 
            string  $password, 
            string  $confirm_password
        )
    {
        $db = require_once 'db/connect.php';
        // CREATE FORM VALIDATE
        $stmt = $db->prepare("CALL insert_new_user(:e, :n, :s, :p)");
        $stmt->bindValue(":e", $this->email, PDO::PARAM_STR);
        $stmt->bindValue(":n", $this->name, PDO::PARAM_STR);
        $stmt->bindValue(":s", $this->surname, PDO::PARAM_STR);
        $stmt->bindValue(":p", $this->password, PDO::PARAM_STR);
        $stmt->execute();
    }

    public static function login(string $email, string $password) {
        session_start();
        $_SESSION["user_id"] = $this->id;
    }

}