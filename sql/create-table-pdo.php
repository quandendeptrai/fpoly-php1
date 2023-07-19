<?php

global $conn;

require_once 'connect/connect-db-pdo.php';

$sql = "
    CREATE TABLE users (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date DATE
    )
";

try {
    $conn->exec($sql);

    echo "Successfully";
} catch (PDOException $PDOException) {
    die($PDOException->getMessage());
}

require_once 'connect/close-pdo.php';