<?php




    $db = require_once "db/connect.php";


    $offerts_main_data = $db->query(
        "
        Select offerts_detailed.id, offerts_detailed.owner, offerts_detailed.name, offerts_detailed.description,offerts_detailed.project_category,  technology.name as 'technology', technology.color 
        from offerts_detailed 
        inner join offert_technology on offerts_detailed.id = offert_technology.id_offert 
        inner join technology on offert_technology.id_technology = technology.id
        
        where offerts_detailed.owner_id <>  ".$_SESSION['user_id']." and offerts_detailed.id not in
        (
              select id_offert from liked_offert where id_user = ".$_SESSION['user_id']."
        );")->fetchAll();


    


    $owned_offerts = $db->query("
        SELECT offerts_detailed.name, offerts_detailed.project_category, technology.name as 'technology', technology.color 
        FROM offerts_detailed 
        inner join offert_technology on offerts_detailed.id = offert_technology.id_offert 
        inner join technology on offert_technology.id_technology = technology.id
        where owner_id = ".$_SESSION['user_id'].";
    ")->fetchAll();











?>