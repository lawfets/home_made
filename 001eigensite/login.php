<?php
    $host = 'localhost';
    $data = 'database_name'; // have to adapt to real world scenario
    $user = 'whatever your username is';  // have to adapt to real world scenario
    $pass = 'whatever your password is';  // have to adapt to real world scenario
    $chrs = 'utf8mb4';
    $attr = "mysql:host=$host;dbname=$data;charset=$chrs";
    $opts = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false
    ];
?>