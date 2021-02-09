<?php

if (isset($_POST['email'])
&& isset($_POST['name'])
&& isset($_POST['surname'])
&& isset($_POST['password'])
&& isset($_POST['confirm_password'])) {

    require_once "models/UserModel.php";
    
    User::register(
        $_POST['email'],
        $_POST['name'],
        $_POST['surname'],
        $_POST['password'],
        $_POST['confirm_password']
    );

    echo "Udało sie!";
    exit();

}

require_once "views/register.php";



