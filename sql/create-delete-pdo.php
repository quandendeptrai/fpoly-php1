<?php

global $conn;

require_once 'connect/connect-db-pdo.php';

$sql = "
    DELETE FROM users
    WHERE id = 4 OR id = 5 OR id = 6;
";

try {
    $stmt = $conn->prepare($sql);

    $stmt->execute();

    echo $stmt->rowCount() . " records DELETED successfully";
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
