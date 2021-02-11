<?php
session_start();

require_once "tools/loginRequired.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require_once "models/editProfileModel.php";
    require_once "validators/editProfileValidator.php";

    if (editProfileValidator()) {

        // User::login();

        header('Location: home');
        exit();
    }
}


require_once "models/editProfileModel.php";
$technologies = EditProfileModel::getTechnologies();


require_once "views/editProfileView.php";