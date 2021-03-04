<?php

session_start();
require_once "tools/loginRequired.php";
//require_once "tools/activeRequired.php";


$id_project_selected = "blabla";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST)){
    $id_project_selected = $_POST;
    require_once "models/homeModelPOST.php";
};

require_once "models/homeModelGET.php";
require_once "views/homeView.php";