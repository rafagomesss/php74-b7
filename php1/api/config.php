<?php
$dbHost = 'localhost';
$dbName = 'devsnotes';
$dbUser = 'root';
$dbPass = 'root';

$pdo = new PDO("mysql:dbname=$dbName;host=$dbHost", $dbUser, $dbPass);


$array = [
    'error' => '',
    'result' => [],
];
