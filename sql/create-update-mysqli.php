<?php

global $conn;

require_once 'connect/connect-db-mysqli.php';

$sql = "
    UPDATE users
    SET reg_date = '2023-07-30'
    WHERE id = 3;
";

if ($conn->query($sql) === TRUE) {
    echo "Successfully";
} else {
    echo "Error: " . $conn->error;
}

require_once 'connect/close-mysqli.php';

?>
