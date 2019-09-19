<?php
    include("dbcon.php");
    include("variabeln.php");
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
        include("headeredit.php");
        include("nav.php");
        include("mainedi.php");
        include("footer.php");
        }
        else{
            echo "Error: ". $changer ."". $conn->error;
        }
    $conn->close();
?>