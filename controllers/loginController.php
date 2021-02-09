<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require_once "models/UserModel.php";
    
    $user = new User();
    $user->login($_POST['email'], $_POST['password']);
}

require_once "views/login.php";

