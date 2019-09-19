<?php
include("dbcon.php");
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT *
    FROM `immobilien` 
    WHERE immobilien.id =" . intval($_GET['id']);

    $result = $conn->query($sql);
    
    $deleter = "DELETE FROM immobilien WHERE immobilien.id = " . intval($_GET['id']);

    if ($conn->query($deleter)){
        include("header.php");
        include("nav.php");
        include("maindel.php");
        include("footer.php");
        }
        else{
        echo "Error: ". $deleter ."
        ". $conn->error;
        }
    $conn->close();
    ?>