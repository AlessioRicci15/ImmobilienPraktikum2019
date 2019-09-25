<?php
    class Country
    {
        private $LandID;
        private $Landname;
        
        function setLandID($newLandID){
            $this->LandID = $newLandID;
        }
        public function getLandID(){
            return $this->LandID;
        }
        function setLandname($newLandname){
            $this->Landname = $newLandname;
        }
        function getLandname(){
            return $this->Landname;
        }
        function orderedCountries(){
            global $conn;
            $landesliste = "SELECT `land`.`LandID`, `land`.`Landname`
                            FROM `land`
                            ORDER BY Landname ASC";
            $result = $conn->query($landesliste);
            $row = $result->fetch_assoc();
            if ($conn->query($landesliste))
            {
                return $row;
                $conn->close();
                return true;
            } else
            {
                $conn->close();
                return false;
            }
        }
    }
?>
