<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    
    require_once "models/UserModel.php";
    require_once "validators/formValidators.php";

    if (FormValidators::register()) {
    
        User::register();

        header('Location: login');
        exit();
    }

}

require_once "views/register.php";



