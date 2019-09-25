<?php
    $servername = "localhost";
    $username = "aless";
    $password = "123456789";
    $dbname = "immobilien";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn->set_charset('utf8');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    global $conn;
?>
