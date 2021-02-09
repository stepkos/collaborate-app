<?php

class FormValidators {
    public static function register(
            $email, 
            $name, 
            $surname, 
            $password, 
            $confirm_password
        )
    {
        return true;
    }
    
    public static function login($email, $password) {
        return true;
    }
}

