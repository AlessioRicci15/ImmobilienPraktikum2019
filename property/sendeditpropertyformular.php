<?php
    include("sql/getformularvariable.php");
    $lander = "SELECT `land`.`LandID`
                FROM `land` 
                WHERE land.Landname = '$land'";
    $result = $conn->query($lander);
    $row = $result->fetch_assoc();
    $landid = "{$row['LandID']}";
    $property = new Property();
    $isChanged = $property->editProperty(
        $adresse,
        $baujahr,
        $preis,
        $landid,
        $id
    );
    if ($isChanged)
    {
        include("layout/maineditproperty.php"); 
    } else
    {
        include("layout/maineditfalse.php");
    }
?>