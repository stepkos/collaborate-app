<?php

// $config = require_once __DIR__.'/config.php';
$config = require_once 'db/config.php';

try {
    return new PDO ("
        mysql:host={$config['host']};
        dbname={$config['database']};
        charset=utf8",
        $config['user'],
        $config['password']
        , [
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    );
}
catch (PDOException $error) {
    echo $error;
    exit('Database error');
}