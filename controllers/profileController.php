<?php


// EVERYTHING IS JUST FOR PURPOSE OF EASY ACCESS TO FRONT END!!!!!!!!!
// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!


session_start();
require_once "tools/loginRequired.php";



require_once "models/profileModelGET.php";

if(isset($user_main_data[0][0])){
    require_once "views/profileView.php";
}
else{
    require_once "views/404.php";
}
