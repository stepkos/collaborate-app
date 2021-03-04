<?php

session_start();
require_once "tools/loginRequired.php";
//require_once "tools/activeRequired.php";


$id_project_selected = "heloł";

if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['chosenIdProject'] != NULL){
    $id_project_selected = $_POST['chosenIdProject'];
    require_once "models/homeModelPOST.php";
};

require_once "models/homeModelGET.php";
require_once "views/homeView.php";