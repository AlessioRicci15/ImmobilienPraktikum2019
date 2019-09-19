<?php
    include("databaseconnaction.php");
    $sql = "SELECT *
            FROM `immobilien` 
            WHERE immobilien.id =" . intval($_GET['id']);
    $result = $conn->query($sql);
    $deleter = "DELETE FROM immobilien 
                WHERE immobilien.id = " . intval($_GET['id']);
    if ($conn->query($deleter)){
        include("head.php");
        include("headerremoveproperty.php");
        include("nav.php");
        include("mainremoveproperty.php");
        include("footer.php");
        }
        else{
        echo "Error: ". $deleter ."". $conn->error;
        }
    $conn->close();
    ?>