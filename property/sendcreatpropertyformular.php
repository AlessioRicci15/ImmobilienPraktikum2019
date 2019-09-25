<?php
    include("model/Property.php");
    include("sql/getformularvariable.php");
    $property = new Property();
    $property->setAdresse($adresse);
    $property->setLand($land);
    $property->setPreis($preis);
    $property->setBaujahr($baujahr);
    $created = $property->createProperty(
        $property->getAdresse(),
        $property->getBaujahr(),
        $property->getPreis(),
        $property->getLand()
    );
    if ($created)
    {
        include("layout/maincreatproperty.php");
    } else
    {
        include("layout/maincreatfalse.php");
    }
?>
