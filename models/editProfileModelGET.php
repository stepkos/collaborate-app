<?php

$db = require_once "db/connect.php";

// $technologies = $db->query(
//     "select users.id, technology.name, technology.color
//         from users
//             inner join users_technology on users.id = users_technology.id_user
//             right outer join technology on users_technology.id_technology = technology.id
//         where users.id=".$_SESSION['user_id']." or users.id is null")
//     ->fetchAll();

$technologies = $db->query(
    "SELECT a.id as id, technology.name as name, technology.color as color
        from (
            SELECT * from users 
                inner join users_technology on users.id = users_technology.id_user
            where users.id = ".$_SESSION['user_id']."
        ) as a
        right outer join technology on a.id_technology = technology.id;")
    ->fetchAll();

$result = $db->query(
    "SELECT media.name, users_media.link
    FROM users_media 
        INNER JOIN media ON media.id = users_media.id_media
    WHERE users_media.id_user=".$_SESSION['user_id'])
    ->fetchAll();

foreach($result as $link)
    $links[$link[0]] = $link[1];
    
unset($result);
 
