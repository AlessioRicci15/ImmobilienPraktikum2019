<?php
    include("dbcon.php");
    
    $adresse = filter_input(INPUT_POST, 'adresse');
    $baujahr = filter_input(INPUT_POST, 'baujahr');
    $preis = filter_input(INPUT_POST, 'preis');
    $land = filter_input(INPUT_POST, 'land');
    
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else {
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
            include("header.php");
            include("nav.php");
            include("mainedi.php");
            include("footer.php");
            }
            else{
            echo "Error: ". $changer ."
            ". $conn->error;
            }
        $conn->close();
    }
?>