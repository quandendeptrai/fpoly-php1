<?php

$servername = 'localhost';
$username = 'root';
$password = '';

// Connect By PDO
try {
    $conn = new PDO("mysql:host=$servername", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die($e->getMessage());
}