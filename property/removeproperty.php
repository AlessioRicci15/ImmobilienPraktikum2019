<?php
    include("../sql/databaseconnaction.php");
    $sql = "SELECT *
            FROM `immobilien` 
            WHERE immobilien.id =" . intval($_GET['id']);
    $result = $conn->query($sql);
    $deleter = "DELETE FROM immobilien 
                WHERE immobilien.id = " . intval($_GET['id']);
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