<?php

$config = require_once 'db/config.php';

try {
    return new PDO(
        "mysql:host={$config['host']};
        dbname={$config['database']}",
        $config['user'],
        $config['password']
    );
}
catch (PDOException $error) {
    echo $error;
    exit('Database error');
}