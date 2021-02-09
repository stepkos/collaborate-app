<?php
session_start();

if (isset($_SESSION['user_id'])) {
    header('Location: home');
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    require_once "models/UserModel.php";
    require_once "validators/formValidators.php";

    if (FormValidators::register()) {
    
        User::register();

        header('Location: login');
        exit();
    }
}

require_once "views/register.php";