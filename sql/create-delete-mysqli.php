<?php

global $conn;

require_once 'connect/connect-db-mysqli.php';

$sql = "
    DELETE FROM users
    WHERE id = 4 OR id = 5 OR id = 6;
";

if ($conn->query($sql) === TRUE) {
    echo "Successfully";
} else {
    echo "Error: " . $conn->error;
}

require_once 'connect/close-mysqli.php';

?>
