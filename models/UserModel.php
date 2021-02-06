<?php
    class User {
        function __construct(
            string $first_name, 
            string $last_name, 
            string $email, 
            string $password, 
            string $profile_picture_url, 
            string $user_description,
            int $technologies_key, 
            int $offers_key, 
            int $favourited_offers_key
        ) {
            $this->first_name = $first_name;
            $this->last_name = $last_name;
            $this->email = $email;
            $this->password = $password;
            $this->profile_picture_url = $profile_picture_url;
            $this->user_description = $user_description;
            $this->technologies_key = $technologies_key;
            $this->offers_key = $offers_key;
            $this->favourited_offers_key = $favourited_offers_key;
        }

        public function save() {
            $db = require_once '../db/connect.php';
        }

        public function login() {
            session_start();
            $_SESSION["user_email"] = $this->email;
            $_SESSION["is_logged"] = true;
        }

        public static function getInfo(int $user_id) {

        }
    }
?>