<?php

global $conn;

require_once 'connect/connect-db-mysqli.php';

$sql = "
    INSERT INTO users (firstname, lastname, email, reg_date)
    VALUES 
        ('Duc 7', 'Tong Van', 'ductv44@fpt.edu.vn', '2023-07-19'),
        ('Duc 8', 'Tong Van', 'ductv44@fpt.edu.vn', '2023-07-19'),
        ('Duc 9', 'Tong Van', 'ductv44@fpt.edu.vn', '2023-07-19'),
        ('Duc 10', 'Tong Van', 'ductv44@fpt.edu.vn', '2023-07-19')
";

// $conn->query($sql);

if ($conn->query($sql) === TRUE) {
    echo "Successfully";
} else {
    echo "Error: " . $conn->error;
}

require_once 'connect/close-mysqli.php';