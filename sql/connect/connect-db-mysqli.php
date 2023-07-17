<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'ductv44';

// Connect By MYSQLi
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("connect failed" . $conn->connect_error);
}
