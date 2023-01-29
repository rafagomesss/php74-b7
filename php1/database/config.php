<?php

$dbName = 'test';
$dbHost = 'localhost';
$dbUser = 'root';
$dbPassword = 'root';

$pdo = new PDO("mysql:dbname=$dbName;host=$dbHost", $dbUser, $dbPassword);