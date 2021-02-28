<?php


    session_start();
    require_once "tools/loginRequired.php";
    require_once "tools/activeRequired.php";

    $url = $_SERVER["REQUEST_URI"];
    $url = explode("/", $url);
    $url = array_filter($url);



    require_once "models/offertDetailsModelGET.php";
    require_once "views/offertDetails.php";

?>


