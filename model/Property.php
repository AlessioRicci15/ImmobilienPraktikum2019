<?php
include("sql/databaseconnaction.php");
class Property {
	private $adresse;
	private $land;
    private $preis;
    private $baujahr;
    private $lat;
    private $lng;

    function setAdresse($newAdresse){
        $this->adresse = $newAdresse;
    }
    function getAdresse(){
        return $this->$adresse;
    }
    function setLand($newLand){
        $this->land = $newLand;
    }
    function getLand(){
        return $this->$land;
    }
    function setPreis($newPreis){
        $this->preis = $newPreis;
    }
    function getPreis(){
        return $this->$preis;
    }
    function setBaujahr($newBaujahr){
        $this->baujahr = $newBaujahr;
    }
    function getBaujahr(){
        return $this->$baujahr;
    }
    function setLat($newLat){
        $this->lat = $newLat;
    }
    function getLat(){
        return $this->$lat;
    }
    function setLng($newLng){
        $this->lng = $newLng;
    }
    function getLng(){
        return $this->$lng;
    }
    function creatProperty(){
        // zu programmieren
    }
}

//            $property->getAdresse();
//            $property->getLand();
//            $property->getPreis();
//            $property->getBaujahr();
//            $property->getLat();
//            $property->getLng();
?>