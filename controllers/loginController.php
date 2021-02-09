<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    
    require_once "models/UserModel.php";
    require_once "validators/formValidators.php";

    if (FormValidators::login()) {

        User::login();

        header('Location: home');
        exit();
    }
}

require_once "views/login.php";

