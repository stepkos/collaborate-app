<?php

session_start();
require_once "tools/loginRequired.php";
//require_once "tools/activeRequired.php";

//Get logged user's projects
$db = require_once "db/connect.php";
$query = $db->query("SELECT * FROM offert WHERE owner_id=".$_SESSION['user_id']);
$projects = $query->fetchAll();
$projects_technologies = [];
foreach ($projects as $proj) {
    $tech_query = $db->query("SELECT project_technology.name, project_technology.color FROM offert_technology INNER JOIN technology ON project_technology.name = technology.name INNER JOIN technology ON project_technology.color = technology.color WHERE id_offert=".$proj['id'].";");
    $tech_query = $tech_query->fetchAll();
    array_push($projects_technologies, $tech_query);
}
echo $projects_technologies[0]['name'];
exit();

require_once "views/homeView.php";