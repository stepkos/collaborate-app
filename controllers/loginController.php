<?php 
session_start();

if (isset($_SESSION['user_id'])) {
    header('Location: home');
    exit();
}

require_once "tools/cleanFormErrors.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require_once "models/userModel.php";
    require_once "validators/formValidators.php";

    if (FormValidators::login()) {

        if (User::login()) {
            header('Location: home');
            exit();
        }
    }
}

require_once "views/loginView.php";