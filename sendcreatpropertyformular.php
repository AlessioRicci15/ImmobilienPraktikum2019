<?php
    include("databaseconnaction.php");
    include("getformularvariable.php");
    $insert = "INSERT INTO immobilien (Ort, Baujahr, Preis, Land)
                values ('$adresse','$baujahr','$preis', '$land')";
    if ($conn->query($insert)){
        include("head.php");
        include("headerformularcreatproperty.php");
        include("nav.php");
        include("maincreatproperty.php");
        include("footer.php");
        }
        else{
        echo "Error: ". $insert ."". $conn->error;
        }
    $conn->close();
?>