<?php
return [
    'dsn' => 'mysql:host=ecoride_mariadb;dbname=ecoride_db;charset=utf8',
    'username' => 'ecoride_user',
    'password' => 'userpassword',
    'options' => [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ],

];