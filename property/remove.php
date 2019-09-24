<?php
    include("sql/routen.php");
    $sql = "SELECT *
            FROM `immobilien` 
            WHERE immobilien.id =" . $id;
    $result = $conn->query($sql);
    $deleter = "DELETE FROM immobilien 
                WHERE immobilien.id = " . $id;
    if ($conn->query($deleter)){
        include("layout/mainremoveproperty.php");
        }
        else{
        echo "Error: ". $deleter ."". $conn->error;
        }
    $conn->close();
?>