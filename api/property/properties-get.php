<?php

header('Content-Type: application/json');

$propertyInstance = new Property();

$property = $propertyInstance->getByID($id);

echo json_encode($property);

?>