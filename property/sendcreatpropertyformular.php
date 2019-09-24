<?php
    include("sql/databaseconnaction.php");
    include("sql/getformularvariable.php");
    $insert = "INSERT INTO immobilien (Ort, Baujahr, Preis, Land)
                values ('$adresse','$baujahr','$preis', '$land')";
    if ($conn->query($insert)){
        include("layout/maincreatproperty.php");
        }
        else{
        echo "Error: ". $insert ."". $conn->error;
        }
    $conn->close();
?>