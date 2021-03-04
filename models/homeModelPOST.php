<?php

    $db = require_once "db/connect.php";

    $project_name = $db->query(
        "Select offerts_detailed.name from offerts_detailed 
        where offerts_detailed.id = $id_project_selected")->fetchAll();


    $users_main_data = $db->query(
        "Select "
    )


    $user_projects = $db->query(
        "Select offerts_detailed.id, offerts_detailed.owner, offerts_detailed.picture, offerts_detailed.name, offerts_detailed.description,offerts_detailed.project_category,  technology.name as 'technology', technology.color 
        from offerts_detailed 
        inner join offert_technology on offerts_detailed.id = offert_technology.id_offert 
        inner join technology on offert_technology.id_technology = technology.id
        
        where offerts_detailed.owner_id = {$profile_user_id};"
    )->fetchAll();

    $owned_offerts_count = $db->query(
        "SELECT count(*) from offert where owner_id = {$profile_user_id};"
    )->fetchAll();






?>