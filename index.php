<?php

$url = $_SERVER["REQUEST_URI"];
$url = explode("/", $url);
$url = array_filter($url);

// Redirect to controller if parameter given
if (isset($url[2]) ) {

    switch ($url[2]) {
        case "register":
            require_once "controllers/registerController.php";

        default:
            echo "Error 404";
    }
}
else {
    echo "Collaborate - Best tool for worst jobs";
    }