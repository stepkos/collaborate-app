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

    // $_SESSION['form_email'] = 'NULL';
    $_SESSION['form_email'] = '';
    if (isset($_POST['email']) && $_POST['email'] != '')
        $_SESSION['form_email'] = $_POST['email'];
  
    // NO VALUE!
    $_SESSION['form_password'] = 'NULL';
    if (isset($_POST['password']) && $_POST['password'] != '')
        $_SESSION['form_password'] = $_POST['password'];

    //-------------------------------//
    //            LINKS              //
    //-------------------------------//
    $_SESSION['link_names'] = '';
    $_SESSION['link_bodies'] = '';
    
    if (isset($_POST['link-portfolio']) && $_POST['link-portfolio'] != '') {
        $_SESSION['link_bodies'] .= $_POST['link-portfolio'].',';
        $_SESSION['link_names'] .= 'Portfolio,';
    }

    if (isset($_POST['link-github']) && $_POST['link-github'] != '') {
        $_SESSION['link_bodies'] .= $_POST['link-github'].',';
        $_SESSION['link_names'] .= 'Github,';
    }

    if (isset($_POST['link-facebook']) && $_POST['link-facebook'] != '') {
        $_SESSION['link_bodies'] .= $_POST['link-facebook'].',';
        $_SESSION['link_names'] .= 'Facebook,';
    }

    if (isset($_POST['link-linkedln']) && $_POST['link-linkedln'] != '') {
        $_SESSION['link_bodies'] .= $_POST['link-linkedln'].',';
        $_SESSION['link_names'] .= 'Linkedln,';
    }

    if (isset($_POST['link-instagram']) && $_POST['link-instagram'] != '') {
        $_SESSION['link_bodies'] .= $_POST['link-instagram'].',';
        $_SESSION['link_names'] .= 'Instagram,';
    }

    if (isset($_POST['link-twitter']) && $_POST['link-twitter'] != '') {
        $_SESSION['link_bodies'] .= $_POST['link-twitter'].',';
        $_SESSION['link_names'] .= 'Twitter,';
    }

    $_SESSION['link_names'] = substr($_SESSION['link_names'], 0, -1);
    $_SESSION['link_bodies'] = substr( $_SESSION['link_bodies'], 0, -1);
    $_SESSION['form_technologies'] = substr( $_SESSION['form_technologies'], 0, -1);

    return true;
}