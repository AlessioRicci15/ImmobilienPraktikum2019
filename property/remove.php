<?php
    $property = new Property();
    $isDeleted = $property->removeProperty(
        $id
    );
    if ($isDeleted){
        include("layout/mainremoveproperty.php");
    } else {
        include("layout/mainremovefalse.php");
    }
?>