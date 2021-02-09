<?php 

if($_SERVER["REQUEST_METHOD"] == "GET") {
    require_once "views/login.php";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "models/UserModel.php";
    $user = new User();
    $user->login($_POST['email'], $_POST['password']);
}

?>
