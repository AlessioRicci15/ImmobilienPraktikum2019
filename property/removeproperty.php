<?php
    include("../sql/databaseconnaction.php");
    include("../sql/urlsplit.php");
    $sql = "SELECT *
            FROM `immobilien` 
            WHERE immobilien.id =" . $id;
    $result = $conn->query($sql);
    $deleter = "DELETE FROM immobilien 
                WHERE immobilien.id = " . $id;
    if ($conn->query($deleter)){
        include("../layout/head.php");
        include("../layout/headerremoveproperty.php");
        include("../layout/nav.php");
        include("../layout/mainremoveproperty.php");
        include("../layout/footer.php");
        }
        else{
        echo "Error: ". $deleter ."". $conn->error;
        }
    $conn->close();
?>