<?php

session_start();
require_once "tools/loginRequired.php";
// require_once "tools/activeRequired.php";

$db = require_once "db/connect.php";

// POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   require_once "";
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