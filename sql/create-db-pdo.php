<?php

global $conn;

require_once '../backend/connect-pdo.php';

$sql = "CREATE DATABASE ductv44_2";

try {
    $conn->exec($sql);

    echo "Database created successfully";
} catch (PDOException $PDOException) {
    die($PDOException->getMessage());
}

require_once '../backend/close-pdo.php';