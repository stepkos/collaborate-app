<?php
    class User {
        function __construct(
            string $first_name, 
            string $last_name, 
            string $email, 
            string $password, 
            string $profile_picture_url, 
            string $user_description,
            bool $is_logged=false, 
            int $technologies_key, 
            int $offers_key, 
            int $favourited_offers_key
        ) {
            $this->name = $name;
            $this->surname = $surname;
            $this->email = $email;
            $this->password = $password;
            $this->profile_picture_url = $profile_picture_url;
            $this->user_description = $user_description;
            $this->technologies_key = $technologies_key;
            $this->is_logged = $is_logged;
            $this->offers_key = $offers_key;
            $this->favourited_offers_key = $favourited_offers_key;
        }

        public function save() {
            
        }

        public function login() {
            $_SESSION["user_email"] = $this->email;
            $_SESSION["is_logged"] = true;
        }

        public static function getInfo(int $user_id) {

        }
    }
?>