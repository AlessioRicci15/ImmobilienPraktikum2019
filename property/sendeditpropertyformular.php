<?php
    include("sql/routen.php");
    include("model/Property.php");
    include("sql/getformularvariable.php");
    $lander = "SELECT `land`.`LandID`
                FROM `land` 
                WHERE land.Landname = '$land'";
    $result = $conn->query($lander);
    $row = $result->fetch_assoc();
    $landid = "{$row['LandID']}";
    //undefined variable property get with id right property
    $property = new Property();
    $property->getAll();
    $changed = $property->editProperty(
        $property->setAdresse($adresse),
        $property->setLand($land),
        $property->setPreis($preis),
        $property->setBaujahr($baujahr),
        $property->getId($id)
    );
    if ($changed)
    {
        include("layout/maineditproperty.php"); 
    } else
    {}
?>