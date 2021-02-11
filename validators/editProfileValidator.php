<?php

function editProfileValidator() {

    // if (isset($_FILES['profile_picture']))
    //     $_SESSION['form_profile_picture'] = $_FILES['profile_picture'];

    $_SESSION['form_description'] = '';
    if (isset($_POST['description']))
        $_SESSION['form_description'] = $_POST['description'];

    $_SESSION['form_technologies'] = '';
    if (isset($_POST['technologies']))
        foreach($_POST['technologies'] as $tech)
            $_SESSION['form_technologies'] .= $tech.',';

    // NO VALUE!
    if (isset($_POST['email']))
        $_SESSION['form_email'] = $_POST['email'];
  
    // NO VALUE!
    if (isset($_POST['password']))
        $_SESSION['form_password'] = $_POST['password'];

    //-------------------------------//
    //            LINKS              //
    //-------------------------------//
    $_SESSION['form_link_portfolio'] = '';
    if (isset($_POST['link-portfolio']))
        $_SESSION['form_link_portfolio'] = $_POST['link-portfolio'];

    $_SESSION['form_link_github'] = '';
    if (isset($_POST['link-github']))
        $_SESSION['form_link_github'] = $_POST['link-github'];

    $_SESSION['form_link_facebook'] = '';
    if (isset($_POST['link-facebook']))
        $_SESSION['form_link_facebook'] = $_POST['link-facebook'];

    $_SESSION['form_link_linkedln'] = '';
    if (isset($_POST['link-linkedln']))
        $_SESSION['form_link_linkedln'] = $_POST['link-linkedln'];

    $_SESSION['form_link_instagram'] = '';
    if (isset($_POST['link-instagram']))
        $_SESSION['form_link_instagram'] = $_POST['link-instagram'];

    $_SESSION['form_link_twitter'] = '';
    if (isset($_POST['link-twitter']))
        $_SESSION['form_link_twitter'] = $_POST['link-twitter'];

    return true;
}