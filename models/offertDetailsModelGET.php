<?php


    $db = require_once "db/connect.php";
    $offert_id = $url[3];

    $offert_main_data = $db->query(
        "Select offerts_detailed.name, offerts_detailed.profile_picture, offerts_detailed.picture, offerts_detailed.project_category, offerts_detailed.description, offerts_detailed.owner, offerts_detailed.owner_id
        from offerts_detailed where offerts_detailed.id = {$offert_id};")->fetchAll();


    $offert_technologies = $db->query(
        "SELECT technology.name, technology.color from technology inner join offert_technology on technology.id = offert_technology.id_technology
        where id_offert = {$offert_id};")->fetchAll();


    $offert_collaborators = $db->query(
        "select id_user from collabolators_offert where id_offert = {$offert_id};")->fetchAll();



?>