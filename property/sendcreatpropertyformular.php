<?php
    include("model/Property.php");
    include("sql/getformularvariable.php");
    
    $insert = "INSERT INTO immobilien (Ort, Baujahr, Preis, Land)
                values ('$adresse','$baujahr','$preis', '$land')";
    
        $property = new Property();
        $property->setAdresse($adresse);
        $property->setLand($land);
        $property->setPreis($preis);
        $property->setBaujahr($baujahr);

    if ($conn->query($insert)){
        include("layout/maincreatproperty.php");
        }
        else{
        echo "Error: ". $insert ."". $conn->error;
        }
    $conn->close();
?>