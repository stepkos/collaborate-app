<?php

// call insert_further_user_data(1, "jej jestem janek", NULL, NULL, "Github,Linkedln","https://github.com/,https//linkedln.com", "React,HTML,CSS");

$db = require_once "db/connect.php";

$query = $db->prepare('CALL insert_further_user_data('.$_SESSION['user_id'].', ":description", ":email", ":password", ":link_names", ":link_bodies", ":technologies")');
$query->bindValue(':description', $_SESSION['form_description'], PDO::PARAM_STR);
$query->bindValue(':email', $_SESSION['form_email'], PDO::PARAM_STR);
$query->bindValue(':password', $_SESSION['form_password'], PDO::PARAM_STR);
$query->bindValue(':link_names', $_SESSION['link_names'], PDO::PARAM_STR);
$query->bindValue(':link_bodies', $_SESSION['link_bodies']);
$query->bindValue(':technologies', $_SESSION['form_technologies'], PDO::PARAM_STR);
$query->execute();

unset($_SESSION['form_description']);
unset($_SESSION['form_email']);
unset($_SESSION['form_password']);
unset($_SESSION['link_names']);
unset($_SESSION['link_bodies']);
unset($_SESSION['form_technologies']);