<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require_once "models/UserModel.php";
    require_once "validators/formValidators.php";

    if (FormValidators::login(
            $_POST['email'],
            $_POST['password'],
        ))
    {
        User::login(
            $_POST['email'],
            $_POST['password']
        );

        header('Location: home');
        exit();
    }
}

require_once "views/login.php";

