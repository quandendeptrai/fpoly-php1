<?php

global $conn;

require_once 'connect/connect-db-pdo.php';

$sql = "
    UPDATE users
    SET reg_date = '2023-07-30';
";

try {
    $stmt = $conn->prepare($sql);

    $stmt->execute();

    echo $stmt->rowCount() . " records UPDATED successfully";
} catch (PDOException $PDOException) {
    die($PDOException->getMessage());
}

require_once 'connect/close-pdo.php';

?>

<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
