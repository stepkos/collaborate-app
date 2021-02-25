<?php

define("ROOT_URL","http://localhost/collaborate/");

$url = $_SERVER["REQUEST_URI"];
$url = explode("/", $url);
$url = array_filter($url);

// Redirect to controller if parameter given
if (isset($url[2]) ) {

    switch ($url[2]) {
        case "register":
            require_once "controllers/registerController.php";
            break;
            
        case "login":
            require_once "controllers/loginController.php";
            break;

        case "logout":
            require_once "controllers/logoutController.php";
            break;

        case "editProfile":
            require_once "controllers/editProfileController.php";
            break;

        case "userPanel":
            require_once "controllers/userPanelController.php";
            break;

        
            
        
        case "addProject":
            require_once "controllers/addProjectController.php";
            break;

        case "profile": //temporary for development purposes!!!!!!!!!!!!
            require_once "controllers/profileController.php";
            break;

        case "offertDetail":  //temporary for development purposes!!!!!!!!!!!!!!!!!!
            require_once "controllers/tempController.php";
            break;

        default:
            echo "Error 404";
    }
}
else {
        require_once "controllers/homeController.php";
        
    }
