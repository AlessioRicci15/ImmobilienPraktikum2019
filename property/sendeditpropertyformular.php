<?php
    include("sql/getformularvariable.php");
    $property = new Property();
    $isChanged = $property->editProperty(
        $adresse,
        $baujahr,
        $preis,
        $land,
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