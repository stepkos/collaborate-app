<?php

$db = require_once "db/connect.php";
$status = $db->query('SELECT active FROM users WHERE id='.$_SESSION['user_id'])->fetch();
if(!$status || $status['active'] != true) {
    header('Location: editProfile');
    exit();
}