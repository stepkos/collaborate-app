<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require_once "models/UserModel.php";
    
    User::register(
        $_POST['email'],
        $_POST['name'],
        $_POST['surname'],
        $_POST['password'],
        $_POST['confirm_password']
    );

    header('Location: '.ROOT_URL.'login');
    exit();

}

require_once "views/register.php";



