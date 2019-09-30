<?php
    class Property
    {
        private $adresse;
        private $land;
        private $preis;
        private $baujahr;
        private $lat;
        private $lng;
        private $id;
        function setAdresse($newAdresse){
            $this->adresse = $newAdresse;
        }
        public function getAdresse(){
            return $this->adresse;
        }
        function setLand($newLand){
            $this->land = $newLand;
        }
        function getLand(){
            return $this->land;
        }
        function setPreis($newPreis){
            $this->preis = $newPreis;
        }
        function getPreis(){
            return $this->preis;
        }
        function setBaujahr($newBaujahr){
            $this->baujahr = $newBaujahr;
        }
        function getBaujahr(){
            return $this->baujahr;
        }
        function setLat($newLat){
            $this->lat = $newLat;
        }
        function getLat(){
            return $this->lat;
        }
        function setLng($newLng){
            $this->lng = $newLng;
        }
        function getLng(){
            return $this->lng;
        }
        function getId(){
            return $this->id;
        }
        function setId($id){
            $this->id = $id;
        }
        function createProperty($adress, $baujahr, $price, $land){
            global $conn;
            $isCreated = "INSERT INTO immobilien (Ort, Baujahr, Preis, Land)
                        values ('$adress','$baujahr','$price','$land')";

            if ($conn->query($isCreated))
            {
                $conn->close();
                return true;
            } else
            {
                $conn->close();
                return false;
            }
        }
        function editProperty($adresse, $baujahr, $preis, $landid, $id){
            global $conn;
            $isChanged = "UPDATE immobilien 
                          SET Ort='$adresse', 
                              Baujahr='$baujahr', 
                              Preis='$preis', 
                              Land=$landid
                          WHERE immobilien.id =" . $id;
            if ($conn->query($isChanged))
            {
                $conn->close();
                return true;
            } else
            {
                $conn->close();
                return false;
            }
        }
        function removeProperty($id){
            global $conn;
            $isDeleted = "DELETE FROM immobilien 
                          WHERE immobilien.id = " . $id;
            if ($conn->query($isDeleted))
            {
                $conn->close();
                return true;
            } else
            {
                $conn->close();
                return false;
            }
        }
        function getByID($id){
            global $conn;
            $sql = "SELECT `immobilien`.`id`, 
                           `immobilien`.`Ort`, 
                           `immobilien`.`Preis`, 
                           `immobilien`.`Baujahr`, 
                           `land`.`LandID`, 
                           `land`.`Landname`, 
                           `immobilien`.`lat`, 
                           `immobilien`.`lng`
                    FROM `immobilien` 
                    LEFT JOIN `land` ON `immobilien`.`Land` = `land`.`LandID`
                    WHERE immobilien.id =" . $id;
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            if ($conn->query($sql))
            {
                return $row;
            } else
            {
                return false;
            }
        }
        function adressAlreadyExist($adresse){
            global $conn;
            $adress = "SELECT `immobilien`.`Ort`
                       FROM `immobilien`
                       WHERE `immobilien`.`Ort` = '$adresse'";
            $result = $conn->query($adress);
            $row = $result->fetch_assoc();

            if ($row === null){
                return false;
            } else {
                return true;
            }
        }
        public static function getAll(){
            global $conn;
            $sql = "SELECT `immobilien`.`id`, 
                           `immobilien`.`Ort`, 
                           `immobilien`.`Preis`, 
                           `immobilien`.`Baujahr`, 
                           `land`.`Landname`
                    FROM `immobilien`
                    LEFT JOIN `land` ON `immobilien`.`Land` = `land`.`LandID`";
            $result = $conn->query($sql);
            $results = [];
            while ($row = $result->fetch_assoc())
            {
                array_push($results, $row);
            }
            $conn->close();
            return $results;
        }
    }
?>