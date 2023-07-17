<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'ductv44_2';

// Connect By PDO
try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die($e->getMessage());
}