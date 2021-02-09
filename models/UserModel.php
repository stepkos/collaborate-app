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
        // $db = require_once 'db/connect.php';
        $db = new PDO( 'mysql:host=localhost;dbname=collaborate', 'root', '');
        // CREATE FORM VALIDATE HERE
        $stmt = $db->prepare('CALL insert_new_user(:e, :n, :s, :p)');
        $stmt->bindValue(':e', $email, PDO::PARAM_STR);
        $stmt->bindValue(':n', $name, PDO::PARAM_STR);
        $stmt->bindValue(':s', $surname, PDO::PARAM_STR);
        $stmt->bindValue(':p', $password, PDO::PARAM_STR);
        $stmt->execute();
    }

    public static function login(string $email, string $password) {
        session_start();
        $_SESSION["user_id"] = $this->id;
    }
    
    public static function checkIfAlreadyExists(string $email) {
        $db = new PDO( 'mysql:host=localhost;dbname=collaborate', 'root', '');
        $sql = "SELECT * FROM users WHERE email='$email'";
        $if_exist = $db->query($sql)->fetchColumn();
        if ($if_exist) {
            return true;
        } else {
            return false;
        }
    }

    public static function authenticate(string $email, string $password) {
        // TODO
    }

}
