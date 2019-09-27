<?php

header('Content-Type: application/json');

$propertyInstance = new Property();

$properties = $propertyInstance->getAll();

echo json_encode($properties,true);

?>