<?php

header('Content-Type: application/json');

$propertyInstance = new Property();

$data = $_POST;

function all_array_keys_exist($array, $keys) {
    $exist = 0;
    foreach($keys as $key){
        if(array_key_exists($key,$array)){
        } else {
        $exist -=1;
        }
    }

    if($exist === 0){
        return true;
    } else {
        return false;
    }
}

$keys_to_check = ['Ort', 'Baujahr', 'Preis', 'LandID'];
$all_keys_exist = all_array_keys_exist($data, $keys_to_check); 

$adresse = $data['Ort'];
$baujahr = $data['Baujahr'];
$preis = $data['Preis'];
$land = $data['LandID'];

if (!$all_keys_exist) {
    echo 'Invalid data body';
    die;
}

if($propertyInstance->adressAlreadyExist($adresse) === true){
    echo 'Adress already exists';
    die;
}

$property = $propertyInstance->createProperty($adresse, $baujahr, $preis, $land);

echo json_encode($property);
?>