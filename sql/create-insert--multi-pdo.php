<?php

global $conn;

require_once 'connect/connect-db-pdo.php';

$sql = "
    INSERT INTO users (firstname, lastname, email, reg_date)
    VALUES 
        ('Duc 100', 'Tong Van', 'ductv44@fpt.edu.vn', '2023-07-19');
";

try {
    $conn->beginTransaction(); // Khởi tạo giao dịch

    $conn->exec($sql);
    $conn->exec($sql);
    $conn->exec($sql);

    $conn->commit(); // xác nhận giao dịch thành công

    echo "Successfully";
} catch (PDOException $PDOException) {

    $conn->rollback(); // hủy giao dịch, đưa về tất cả về như chưa có gì xảy ra

    die($PDOException->getMessage());
}

require_once 'connect/close-pdo.php';