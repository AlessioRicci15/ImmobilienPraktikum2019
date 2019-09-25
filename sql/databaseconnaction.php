<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "yourpassword";
    $dbname = "imobilien";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn->set_charset('utf8');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    global $conn;
?>
