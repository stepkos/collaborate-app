<?php
    $db = require_once 'db/connect.php';


    class User {
        function __construct(
            int $id,
            string $name, 
            string $surname, 
            string $email, 
            string $password, 
            string $profile_picture_url, 
            string $user_description,
            int $technologies_key, 
            int $offers_key, 
            int $favourited_offers_key
        ) {
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
            global $db;
            $stmt = $db->prepare("CALL insert_new_user(?)");
            $stmt->bindValue(':email1', $this->email, PDO::PARAM_STR);
            $stmt->bindValue(':name1', $this->name, PDO::PARAM_STR);
            $stmt->bindValue(':surname1', $this->surname, PDO::PARAM_STR);
            $stmt->bindValue(':password1', $this->password, PDO::PARAM_STR);
            $stmt->execute();
            $this->login();
        }

        public function login() {
            session_start();
            $_SESSION["user_id"] = $this->id;
            $_SESSION["is_logged"] = true;
        }

        public static function getAll() {
            $users = $db->query("SELECT id, name, surname, email FROM users");
            return $users;
        }

        public static function getSingleUser(int $user_id) {
            $users = $db->query("SELECT id, name, surname, email, profile_picture, description, companies from users WHERE id=".$user_id);
            return $users;
        }
    }
?>