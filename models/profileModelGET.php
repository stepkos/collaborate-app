<?php

    $db = require_once "db/connect.php";

    $profile_user_id = $url[3];

    $user_main_data = $db->query(
        "SELECT concat(name,' ',surname) as 'fullname', 
        description, profile_picture from users where id={$profile_user_id};")->fetchAll();


    $user_social_links = $db->query(
        "SELECT media.name, users_media.link from media inner join users_media
         on media.id = users_media.id_media where users_media.id_user = {$profile_user_id};"
        )->fetchAll();


    $user_technologies = $db->query(
        "SELECT technology.name, technology.color from technology inner join users_technology 
        on technology.id = users_technology.id_technology where users_technology.id_user = {$profile_user_id};"
        )->fetchAll();

    $user_projects = $db->query(
        "Select offerts_detailed.id, offerts_detailed.owner, offerts_detailed.picture, offerts_detailed.name, offerts_detailed.description,offerts_detailed.project_category,  technology.name as 'technology', technology.color 
        from offerts_detailed 
        inner join offert_technology on offerts_detailed.id = offert_technology.id_offert 
        inner join technology on offert_technology.id_technology = technology.id
        
        where offerts_detailed.owner_id = {$profile_user_id};"
    )->fetchAll();

    $user_projects_count = $db->query(
        "SELECT count(*) from offert where owner_id = {$profile_user_id};"
    )->fetchAll();

    


?>