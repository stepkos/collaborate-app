<?php 

if($_SERVER["REQUEST_METHOD"] == "GET") {
    require_once "views/login.php";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "models/User.php";
    $user = new User();
    $user->checkIfAlreadyExists($_POST["email"]);
}

?>