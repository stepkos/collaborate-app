<?php

$config = require_once 'db/config.php';

try {
    $pdo = new PDO(
        "mysql:host={$config['host']};
        dbname={$config['database']}",
        $config['user'],
        $config['password']
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $pdo;
}
catch (PDOException $error) {
    echo $error;
    exit('Database error');
}