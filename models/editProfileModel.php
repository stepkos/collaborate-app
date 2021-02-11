<?php

class EditProfileModel {

    public static function getTechnologies() {
        $db = require_once "db/connect.php";

        return $db->query(
            "select users.id, technology.name, technology.color
                from users
                    inner join users_technology on users.id = users_technology.id_user
                    right outer join technology on users_technology.id_technology = technology.id
                where users.id=".$_SESSION['user_id']." or users.id is null")
            ->fetchAll();
    }
}