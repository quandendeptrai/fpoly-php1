<?php

global $conn;

require_once 'connect/connect-mysqli.php';

$sql = "CREATE DATABASE ductv44";

// $conn->query($sql);

if ($conn->query($sql) === TRUE) {
    echo "Successfully";
} else {
    echo "Error: " . $conn->error;
}

require_once 'connect/close-mysqli.php';