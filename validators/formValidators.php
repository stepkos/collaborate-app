<?php

class FormValidators {
    public static function register() {

        $validate = true;

        if (isset($_POST['email']) && $_POST['email'] != '')
            $_SESSION['form_email'] = filter_input(INPUT_POST, 'email');
        else {
            $_SESSION['form_error_email'] = ' is required';
            $validate = false;
        }

        if (isset($_POST['name']) && $_POST['name'] != '')
            $_SESSION['form_name'] = filter_input(INPUT_POST, 'name');
        else {
            $_SESSION['form_error_name'] = ' is required';
            $validate = false;
        }

        if (isset($_POST['surname']) && $_POST['surname'] != '')
            $_SESSION['form_surname'] = filter_input(INPUT_POST, 'surname');
        else {
            $_SESSION['form_error_surname'] = ' is required';
            $validate = false;
        }

        if (isset($_POST['password']) && $_POST['password'] != '')
            $_SESSION['form_password'] = filter_input(INPUT_POST, 'password');
        else {
            $_SESSION['form_error_password'] = ' is required';
            $validate = false;
        }

        if (isset($_POST['confirm_password']) && $_POST['confirm_password'] != '') 
            $_SESSION['form_confirm_password'] = filter_input(INPUT_POST, 'confirm_password');
        else {
            $_SESSION['form_error_confirm_password'] = ' is required';
            $validate = false;
        }

        if (!$validate)
            return false;
        
        if ($_SESSION['form_password'] != $_SESSION['form_confirm_password']) {
            $_SESSION['form_error_confirm_password'] = ' passwords are not the same';
            return false;
        }
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

