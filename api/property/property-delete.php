<?php
header('Content-Type: application/json');
$propertyInstance = new Property();
$property = $propertyInstance->removeProperty($id);
echo json_encode($property);
?>