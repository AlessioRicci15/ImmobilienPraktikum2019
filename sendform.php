<?php
    $adresse = filter_input(INPUT_POST, 'adresse');
    $baujahr = filter_input(INPUT_POST, 'baujahr');
    $preis = filter_input(INPUT_POST, 'preis');
    $land = filter_input(INPUT_POST, 'land');
    include("dbcon.php");
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    else{
    $lander = "SELECT `land`.`LandID`
    FROM `land` 
    WHERE land.Landname = '$land'";
    $result = $conn->query($lander);
    $row = $result->fetch_assoc();
    $landid = "{$row['LandID']}";
    $insert = "INSERT INTO immobilien (Ort, Baujahr, Preis, Land)
    values ('$adresse','$baujahr','$preis', '$landid')";
    if ($conn->query($insert)){
        include("header.php");
        include("nav.php");
        include("mainadd.php");
        include("footer.php");
        }
        else{
        echo "Error: ". $insert ."
        ". $conn->error;
        }
    $conn->close();
    }
?>