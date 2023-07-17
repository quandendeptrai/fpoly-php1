<?php

global $conn;

require_once 'connect/connect-mysqli.php';

$sql = "CREATE DATABASE ductv44";

// $conn->query($sql);

if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

require_once 'connect/close-mysqli.php';