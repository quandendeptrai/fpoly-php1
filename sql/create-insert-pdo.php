<?php

global $conn;

require_once 'connect/connect-db-pdo.php';

$sql = "
    INSERT INTO users (firstname, lastname, email, reg_date)
    VALUES 
        ('Duc 7', 'Tong Van', 'ductv44@fpt.edu.vn', '2023-07-19'),
        ('Duc 8', 'Tong Van', 'ductv44@fpt.edu.vn', '2023-07-19'),
        ('Duc 9', 'Tong Van', 'ductv44@fpt.edu.vn', '2023-07-19'),
        ('Duc 10', 'Tong Van', 'ductv44@fpt.edu.vn', '2023-07-19')
";

try {
    $conn->exec($sql);

    echo "Successfully";
} catch (PDOException $PDOException) {
    die($PDOException->getMessage());
}

require_once 'connect/close-pdo.php';