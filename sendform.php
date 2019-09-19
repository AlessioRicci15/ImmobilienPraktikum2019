<?php
    include("dbcon.php");
    include("variabeln.php");
    $insert = "INSERT INTO immobilien (Ort, Baujahr, Preis, Land)
                values ('$adresse','$baujahr','$preis', '$land')";
    if ($conn->query($insert)){
        include("head.php");
        include("headerformular.php");
        include("nav.php");
        include("mainadd.php");
        include("footer.php");
        }
        else{
        echo "Error: ". $insert ."". $conn->error;
        }
    $conn->close();
?>