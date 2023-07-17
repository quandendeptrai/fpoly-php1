<?php

global $conn;

require_once '../backend/connect-mysqli.php';

$sql = "CREATE DATABASE ductv44";

// $conn->query($sql);

if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

require_once '../backend/close-mysqli.php';