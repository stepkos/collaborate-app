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
        // CREATE FORM VALIDATE HERE
        $stmt = $db->prepare('CALL insert_new_user(:e, :n, :s, :p)');
        $stmt->bindValue(':e', $email, PDO::PARAM_STR);
        $stmt->bindValue(':n', $name, PDO::PARAM_STR);
        $stmt->bindValue(':s', $surname, PDO::PARAM_STR);
        $stmt->bindValue(':p', $password, PDO::PARAM_STR);
        $stmt->execute();
    }


    public static function checkIfAlreadyExists(string $email) {
        $db = require_once 'db/connect.php';
        $sql = "SELECT * FROM users WHERE email='$email'";
        $if_exist = $db->query($sql)->fetchColumn();
        if ($if_exist) {
            return true;
        } else {
            return false;
        }
    }

    public static function getIDByEmail(string $email) {
        $db = require_once 'db/connect.php';
        $sql = "SELECT id FROM users WHERE email='$email'";
        $id = $db->query($sql);
        $id = $id->fetch();
        return $id["id"];
    }

    public static function validatePassword(string $password) {
        $db = require_once 'db/connect.php';
        $sql = "SELECT * FROM users WHERE password='$password'";
        $validPassword = $db->query($sql)->fetchColumn();
        if ($validPassword) {
            return true;
        } else {
            return false;
        }
    }

    public static function login(string $email, string $password) {
        if (checkIfAlreadyExists($email) == false) {
            $isPasswordValid = validatePassword($password);
            $id = getIDByEmail($email);
            if ($isPasswordValid && $id) {
                session_start();
                $_SESSION["user_id"] = $id;
                require_once "views/TestUserView.php";
            } else {
                header("Location: http://localhost/collaborate/login");
            }
        }
    }
}
