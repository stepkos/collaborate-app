<?php


    session_start();
    require_once "tools/loginRequired.php";
    require_once "tools/activeRequired.php";

    $url = $_SERVER["REQUEST_URI"];
    $url = explode("/", $url);
    $url = array_filter($url);



    require_once "models/offertDetailsModelGET.php";
    if(isset($offert_main_data[0][0])){
        require_once "views/offertDetails.php";
    }
    else{
        require_once "views/404.php";
    }
    

?>


