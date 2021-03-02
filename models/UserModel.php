<?php

class User {
    public static function register() {
        $db = require_once 'db/connect.php';

        $query = $db->prepare('SELECT email FROM users WHERE email = :e');
        $query->bindValue(':e', $_SESSION['form_email'], PDO::PARAM_STR);
        $query->execute();
        if ($query->fetch()) {
            $_SESSION['form_error_email'] = "This email adress is arleady taken!";
            return false;
        }

        $query  = $db->prepare('CALL insert_new_user(:e, :n, :s, :p)');
        $query->bindValue(':e', $_SESSION['form_email'], PDO::PARAM_STR);
        $query->bindValue(':n', $_SESSION['form_name'], PDO::PARAM_STR);
        $query->bindValue(':s', $_SESSION['form_surname'], PDO::PARAM_STR);
        $query->bindValue(':p', $_SESSION['form_password'], PDO::PARAM_STR);
        // $query->bindValue(':p', password_hash($_SESSION['form_password'], PASSWORD_DEFAULT), PDO::PARAM_STR);
        $query->execute();

        unset($_SESSION['form_email']);
        unset($_SESSION['form_name']);
        unset($_SESSION['form_surname']);
        unset($_SESSION['form_password']);
        unset($_SESSION['form_confirm_password']);

        require_once "tools/cleanFormErrors.php";

        return true;
    }
    
    public static function login() {
        $db = require_once 'db/connect.php';
        $query = $db->prepare('CALL login_user(:e, :p)');
        $query->bindValue(':e', $_SESSION['form_email'], PDO::PARAM_STR);
        $query->bindValue(':p', $_SESSION['form_password'], PDO::PARAM_STR);
        $query->execute();

        $user = $query->fetch();

        if ($user) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['user_surname'] = $user['surname'];
            // $_SESSION['user_profile_picture'] = $user['profile_picture'];
            $_SESSION['user_active'] = $user['active'];
            $_SESSION['user_premium'] = $user['premium'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_description'] = $user['description'];
            $_SESSION['profile_picture'] = $user['profile_picture'];

            
            // unset validate errors sesstion valiables
            unset($_SESSION['form_email']);
            unset($_SESSION['form_password']);
            
            require_once "tools/cleanFormErrors.php";

            // UNSET OTHER FORM SESSION VARIABLES
            return true;
        }
        
        $_SESSION['form_error_email'] = "Incorrect login or password!";
        return false;
               
    }

    public static function logout() {
        session_start();
        session_unset();
    }
    
    // public static function checkIfAlreadyExists(string $email) {
    //     $db = require_once 'db/connect.php';
    //     $sql = "SELECT * FROM users WHERE email='$email'";
    //     $if_exist = $db->query($sql)->fetchColumn();
    //     if ($if_exist) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }

    // public static function getIDByEmail(string $email) {
    //     $db = require_once 'db/connect.php';
    //     $sql = "SELECT id FROM users WHERE email='$email'";
    //     $id = $db->query($sql);
    //     $id = $id->fetch();
    //     return $id["id"];
    // }

    // public static function validatePassword(string $password) {
    //     $db = require_once 'db/connect.php';
    //     $sql = "SELECT * FROM users WHERE password='$password'";
    //     $validPassword = $db->query($sql)->fetchColumn();
    //     if ($validPassword) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }

}
