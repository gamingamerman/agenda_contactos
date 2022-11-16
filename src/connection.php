<?php
    $conn = new mysqli('db', 'root', 'test', 'ut3');
    $error = $conn->connect_errno;
    if ($error != null) {
        echo "</p>El error dice: " . $conn->connection_error . "</p>";
        die();
    }
?>