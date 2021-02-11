<?php

function editProfileValidator() {

    if (isset($_FILES['profile_picture']))
        $_SESSION['form_profile_picture'] = $_FILES['profile_picture'];

    if (isset($_POST['description']))
        $_SESSION['form_description'] = $_POST['description'];


    echo $_SESSION['form_description'];
    exit();

    


    return true;
}