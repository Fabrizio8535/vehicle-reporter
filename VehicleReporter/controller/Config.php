<?php
$pdoOptions = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false
);

$pdo = new PDO(
    "mysql:host=" . 'kunet' . ";dbname=" . 'db_k1723548', //DatbaseName
    'k1723548', //Username
    'database', //Password
    $pdoOptions //Options
);