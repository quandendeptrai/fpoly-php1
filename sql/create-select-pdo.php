<?php

global $conn;

require_once 'connect/connect-db-pdo.php';

$sql = "
    SELECT * FROM users
";

try {
    $stmt = $conn->prepare($sql);

    $stmt->execute();

    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    echo "<table>
          <tr>
               <th>ID</th>
               <th>Firstname</th>
               <th>Lastname</th>
               <th>Email</th>
               <th>Reg_date</th>
          </tr>";
    foreach ($stmt->fetchAll() as $item) {
        echo "
          <tr>
               <td>{$item['id']}</td>
               <td>{$item['firstname']}</td>
               <td>{$item['lastname']}</td>
               <td>{$item['email']}</td>
               <td>{$item['reg_date']}</td>
          </tr>
    ";
    }

    echo "</table>";
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
