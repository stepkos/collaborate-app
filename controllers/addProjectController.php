<?php

session_start();
require_once "tools/loginRequired.php";
// require_once "tools/activeRequired.php";

$db = require_once "db/connect.php";

// POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   require_once "validators/addProjectValidator.php";

   if (addProjectValidator()) {
    $user_id = $_SESSION['user_id'];
    $projectPhoto = base64_encode(file_get_contents($_FILES['project_photo']['tmp_name']));
    $projectTechnologies = $_SESSION['project_technologies'];
    $projectName = $_SESSION['project_name'];
    $projectTarget = $_SESSION['project_target'];
    $projectDescription = $_SESSION['project_description'];
    $sql = "CALL insert_new_offert($user_id,'$projectTarget','$projectName','$projectPhoto','$projectDescription','$projectTechnologies');";
    $db->query($sql);
    header("Location: userPanel");
   }
}

// GET
$technologies = $db->query(
    "select users.id, technology.name, technology.color
        from users
            inner join users_technology on users.id = users_technology.id_user
            right outer join technology on users_technology.id_technology = technology.id
        where users.id=".$_SESSION['user_id']." or users.id is null")
    ->fetchAll();

require_once "views/addProjectView.php";

?>