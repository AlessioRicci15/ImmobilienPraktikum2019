<?php

header('Content-Type: application/json');

$propertyInstance = new Property();

// GET URL PARAMS FOR ORDERBY AND ORDERDIRECTION
// PASS PARAMETERS TO getAll();

$properties = $propertyInstance->getAll();

echo json_encode($properties,true);

?>