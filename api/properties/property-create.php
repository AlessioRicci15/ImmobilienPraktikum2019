<?php

header('Content-Type: application/json');

$propertyInstance = new Property();

$property = $propertyInstance->createProperty($adress, $baujahr, $price, $land);

echo json_encode($property);

?>