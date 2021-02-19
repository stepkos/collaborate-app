<?php

function addProjectValidator() {
    $_SESSION['project_technologies'] = '';
    if (isset($_POST['technologies']))
        foreach($_POST['technologies'] as $tech)
            $_SESSION['project_technologies'] .= $tech.',';

    $_SESSION['project_name'] = '';
    if (isset($_POST['project_name']))
        $_SESSION['project_name'] = $_POST['project_name'];
  
    $_SESSION['project_target'] = '';
    if(isset($_POST['project_target']))
        $_SESSION['project_target'] = $_POST['project_target'];

    $_SESSION['project_description'] = '';
    if (isset($_POST['project_description']))
        $_SESSION['project_description'] = $_POST['project_description'];
    return true;
}