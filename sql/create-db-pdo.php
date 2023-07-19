<?php

global $conn;

require_once 'connect/connect-pdo.php';

$sql = "CREATE DATABASE ductv44_2";

try {
    $conn->exec($sql);

    echo "Successfully";
} catch (PDOException $PDOException) {
    die($PDOException->getMessage());
}

require_once 'connect/close-pdo.php';