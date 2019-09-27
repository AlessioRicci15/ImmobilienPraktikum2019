<?php

header('Content-Type: application/json');

$propertyInstance = new Property();

$property = $propertyInstance->editProperty($adresse, $baujahr, $preis, $landid, $id);

echo json_encode($property);

?>