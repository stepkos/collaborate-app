<?php

if($_SESSION['user_active'] == 0) {
    header('Location: editProfile');
    exit();
}