<?php

global $conn;

require_once '../backend/connect-db-mysqli.php';

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
    echo "Table created successfully";
} else {
    echo "Error creating Table: " . $conn->error;
}

require_once '../backend/close-mysqli.php';