<?php
    include("sql/databaseconnaction.php");
    include("sql/routen.php");
    include("sql/getformularvariable.php");
    $lander = "SELECT `land`.`LandID`
                FROM `land` 
                WHERE land.Landname = '$land'";
    $result = $conn->query($lander);
    $row = $result->fetch_assoc();
    $landid = "{$row['LandID']}";
    $changer = "UPDATE immobilien 
                SET Ort='$adresse', Baujahr='$baujahr', Preis='$preis', Land=$landid
                WHERE immobilien.id =" . $id;
    if ($conn->query($changer)){
        include("layout/maineditproperty.php");
        }
        else{
            echo "Error: ". $changer ."". $conn->error;
        }
    $conn->close();
?>