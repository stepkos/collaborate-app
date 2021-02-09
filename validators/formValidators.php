<?php

class FormValidators {
    public static function register() {

        if (isset($_POST['email']))
            $_SESSION['form_email'] = filter_input(INPUT_POST, 'email');

        if (isset($_POST['name']))
            $_SESSION['form_name'] = filter_input(INPUT_POST, 'name');

        if (isset($_POST['surname']))
            $_SESSION['form_surname'] = filter_input(INPUT_POST, 'surname');

        if (isset($_POST['password']))
            $_SESSION['form_password'] = filter_input(INPUT_POST, 'password');

        if (isset($_POST['confirm_password']))
            $_SESSION['form_confirm_password'] = filter_input(INPUT_POST, 'confirm_password');
        
        return true;
    }
    
    public static function login() {

        if (isset($_POST['email']))
            $_SESSION['form_email'] = filter_input(INPUT_POST, 'email');

        if (isset($_POST['password']))
            $_SESSION['form_password'] = filter_input(INPUT_POST, 'password');

        return true;
    }
}

