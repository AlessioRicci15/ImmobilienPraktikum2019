<?php
header('Content-Type: application/json');
$orderBy = filter_input(INPUT_GET,"orderby",FILTER_SANITIZE_STRING);
$orderDirection = filter_input(INPUT_GET,"orderdirection",FILTER_SANITIZE_STRING);
$propertyInstance = new Property();
if($orderBy === null || $orderDirection === null){
    $attribut = 'id';
    $direction = 'ASC'; 
} else {
    $attribut = $orderBy;
    $direction = $orderDirection; 
}
$properties = $propertyInstance->getAll($attribut, $direction);
echo json_encode($properties,true);
?>