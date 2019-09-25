<?php
    $sql = "SELECT *
            FROM `immobilien` 
            WHERE immobilien.id =" . $id;
    $result = $conn->query($sql);
    $property = new Property();
    $isDeleted = $property->removeProperty(
        $id
    );
    if ($isDeleted){
        include("layout/mainremoveproperty.php");
        }
        else{
        include("layout/mainremovefalse.php");
        }
?>