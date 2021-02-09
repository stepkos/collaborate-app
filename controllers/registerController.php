<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    require_once "models/UserModel.php";
    require_once "validators/formValidators.php";

    if (FormValidators::register(
            $_POST['email'],
            $_POST['name'],
            $_POST['surname'],
            $_POST['password'],
            $_POST['confirm_password']
        ))
    {
        User::register(
            $_POST['email'],
            $_POST['name'],
            $_POST['surname'],
            $_POST['password']
        );
    
        header('Location: login');
        exit();
    }

}

require_once "views/register.php";



