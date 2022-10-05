<?php

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'bearsu';

// $db_host = '192.168.33.200';
// $db_user = 'proj57';
// $db_pass = 'proj57';
// $db_name = 'proj57';

// MENG
// $db_host = '192.168.33.111';
// $db_user = 'admin';
// $db_pass = 'admin';
// $db_name = 'bearsu';

// mydb
// $db_host = '127.0.0.1';
// $db_user = 'mengying';
// $db_pass = ']C3CT7YywOS6Dd89';
// $db_name = 'mytest';


$dsn = "mysql:host={$db_host};dbname={$db_name};charset=utf8"; // data source name

$pdo_options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try{
    $pdo = new PDO($dsn, $db_user, $db_pass, $pdo_options);
} catch(PDOException $ex) {
    echo "Exceprion: ". $ex->getMessage();
}

if(! isset($_SESSION)){
    session_start();
}
