<?php

global $conn;

require_once 'connect/connect-db-mysqli.php';

$sql = "
    CREATE TABLE users (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date DATE
    )
";

// $conn->query($sql);

if ($conn->query($sql) === TRUE) {
    echo "Successfully";
} else {
    echo "Error: " . $conn->error;
}

require_once 'connect/close-mysqli.php';