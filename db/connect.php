<?php

$config = require_once 'db/config.php';

try {
    $pdo = new PDO(
        "mysql:host={$config['host']};
        port=3300;
        dbname={$config['database']}",
        $config['user'],
        $config['password']
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute( PDO::ATTR_EMULATE_PREPARES, false );

    return $pdo;
}
catch (PDOException $error) {
    echo $error;
    exit('Database error');
}