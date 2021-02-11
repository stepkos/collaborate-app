<?php
session_start();

require_once "tools/loginRequired.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    require_once "validators/editProfileValidator.php";
    
    if (editProfileValidator()) {
        
        // User::login();
        
        header('Location: home');
        exit();
    }
}

require_once "models/editProfileModelGET.php";
require_once "views/editProfileView.php";