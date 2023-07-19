<?php

global $conn;

require_once 'connect/connect-db-mysqli.php';

$sql = "
    SELECT * FROM users
";

$result = $conn->query($sql);

echo "<table>
          <tr>
               <th>ID</th>
               <th>Firstname</th>
               <th>Lastname</th>
               <th>Email</th>
               <th>Reg_date</th>
          </tr>";
foreach ($result->fetch_all(MYSQLI_ASSOC) as $item) {
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

require_once 'connect/close-mysqli.php';

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
