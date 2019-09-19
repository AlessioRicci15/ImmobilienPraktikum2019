<?php
    include("dbcon.php");
    $sql = "SELECT *
            FROM `immobilien` 
            WHERE immobilien.id =" . intval($_GET['id']);
    $result = $conn->query($sql);
    $deleter = "DELETE FROM immobilien 
                WHERE immobilien.id = " . intval($_GET['id']);
    if ($conn->query($deleter)){
        include("head.php");
        include("headerremove.php");
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