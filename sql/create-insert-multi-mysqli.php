<?php

global $conn;

require_once 'connect/connect-db-mysqli.php';

$sql = "
    INSERT INTO users (firstname, lastname, email, reg_date)
    VALUES 
        ('Duc 7', 'Tong Van', 'ductv44@fpt.edu.vn', '2023-07-19');

    INSERT INTO users (firstname, lastname, email, reg_date)
    VALUES 
        ('Duc 8', 'Tong Van', 'ductv44@fpt.edu.vn', '2023-07-19');
";

// $conn->multi_query($sql);

if ($conn->multi_query($sql) === TRUE) {
    echo "Successfully";
} else {
    echo "Error: " . $conn->error;
}

require_once 'connect/close-mysqli.php';