<?php
    include("databaseconnaction.php");
    include("getformularvariable.php");
    $lander = "SELECT `land`.`LandID`
                FROM `land` 
                WHERE land.Landname = '$land'";
    $result = $conn->query($lander);
    $row = $result->fetch_assoc();
    $landid = "{$row['LandID']}";
    $changer = "UPDATE immobilien 
                SET Ort='$adresse', Baujahr='$baujahr', Preis='$preis', Land=$landid
                WHERE immobilien.id =" . intval($_POST['id']);
    if ($conn->query($changer)){
        include("head.php");
        include("headereditproperty.php");
        include("nav.php");
        include("maineditproperty.php");
        include("footer.php");
        }
        else{
            echo "Error: ". $changer ."". $conn->error;
        }
    $conn->close();
?>