<?php

class User {
    public static function register() {
        $db = require_once 'db/connect.php';
        $query  = $db->prepare('CALL insert_new_user(:e, :n, :s, :p)');
        $query->bindValue(':e', $_SESSION['form_email'], PDO::PARAM_STR);
        $query->bindValue(':n', $_SESSION['form_name'], PDO::PARAM_STR);
        $query->bindValue(':s', $_SESSION['form_surname'], PDO::PARAM_STR);
        $query->bindValue(':p', $_SESSION['form_password'], PDO::PARAM_STR);
        $query->execute();
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

            // unset validate errors sesstion valiables
            unset($_SESSION['form_error_email']);

            // UNSET OTHER FORM SESSION VARIABLES
        }
        else {
            $_SESSION['form_error_email'] = "Incorrect login or password!";
        }
               
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
