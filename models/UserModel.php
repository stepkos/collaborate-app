<?php

class User {
    function __construct(
            int     $id,
            string  $name, 
            string  $surname, 
            string  $email, 
            string  $password, 
            string  $profile_picture_url, 
            string  $user_description,
            int     $technologies_key, 
            int     $offers_key, 
            int     $favourited_offers_key
        ) 
    {
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->password = $password;
        $this->profile_picture_url = $profile_picture_url;
        $this->user_description = $user_description;
        $this->technologies_key = $technologies_key;
        $this->offers_key = $offers_key;
        $this->favourited_offers_key = $favourited_offers_key;
    }
        
    public function register() {
        $db = require_once 'db/connect.php';
        $stmt = $db->prepare("CALL insert_new_user(?, ?, ?, ?)");
        $stmt->bindValue(1, $this->email, PDO::PARAM_STR);
        $stmt->bindValue(2, $this->name, PDO::PARAM_STR);
        $stmt->bindValue(3, $this->surname, PDO::PARAM_STR);
        $stmt->bindValue(4, $this->password, PDO::PARAM_STR);
        $stmt->execute();
    }

    public function login() {
        session_start();
        $_SESSION["user_id"] = $this->id;
        $_SESSION["is_logged"] = true;
    }

    // -----STATIC------
    public static function getAll() {
        $db = require_once 'db/connect.php';
        $users = $db->query("SELECT id, name, surname, email FROM users");
        return $users;
    }
    
    // -----STATIC------
    public static function getSingleUser(int $user_id) {
        $db = require_once 'db/connect.php';
        $users = $db->query("SELECT id, name, surname, email, profile_picture, description, companies from users WHERE id=".$user_id);
        return $users;
    }
}