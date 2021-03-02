<?php

// call insert_further_user_data(1, "jej jestem janek", NULL, NULL, "Github,Linkedln","https://github.com/,https//linkedln.com", "React,HTML,CSS");

$db = require_once "db/connect.php";

// $query = $db->prepare('CALL insert_further_user_data('.$_SESSION['user_id'].', ":description", ":email", ":password", ":link_names", ":link_bodies", ":technologies")');
// $query->bindValue(':description', $_SESSION['form_description'], PDO::PARAM_STR);
// $query->bindValue(':email', $_SESSION['form_email'], PDO::PARAM_STR);
// $query->bindValue(':password', $_SESSION['form_password'], PDO::PARAM_STR);
// $query->bindValue(':link_names', $_SESSION['link_names'], PDO::PARAM_STR);
// $query->bindValue(':link_bodies', $_SESSION['link_bodies']);
// $query->bindValue(':technologies', $_SESSION['form_technologies'], PDO::PARAM_STR);

$sql = 'CALL insert_further_user_data('.$_SESSION['user_id'].', "'.$_SESSION['form_description'].'", "'.$_SESSION['form_email'].'", '.$_SESSION['form_password'].', "'.$_SESSION['link_names'].'", "'.$_SESSION['link_bodies'].'", "'.$_SESSION['form_technologies'].'", "'.$_SESSION['profile_picture'].'");';
// echo $sql;
// exit();
$db->query($sql);
// $db->query('call insert_further_user_data(9, "jej jestem janek", NULL, NULL, "Github,Linkedln","https://github.com/,https//linkedln.com", "React,HTML,CSS");');

unset($_SESSION['form_description']);
unset($_SESSION['form_email']);
unset($_SESSION['form_password']);
unset($_SESSION['link_names']);
unset($_SESSION['link_bodies']);
unset($_SESSION['form_technologies']);
unset($_SESSION['profile_picture']);


// update user session data
$user = $db->query("SELECT * FROM users WHERE id=".$_SESSION['user_id'])->fetch();
$_SESSION['user_id'] = $user['id'];
$_SESSION['user_name'] = $user['name'];
$_SESSION['user_surname'] = $user['surname'];
// $_SESSION['user_profile_picture'] = $user['profile_picture'];
$_SESSION['user_active'] = $user['active'];
$_SESSION['user_premium'] = $user['premium'];
$_SESSION['user_email'] = $user['email'];
$_SESSION['user_description'] = $user['description'];
$_SESSION['user_picture'] = base64_encode($user['profile_picture']);