<?php
    class Property
    {
        private $ISIN;
        private $land;
        private $WKN;
        private $name;
        private $sparte;
        private $Aktien_ID;
        function setISIN($newISIN){
            $this->ISIN = $newISIN;
        }
        public function getISIN(){
            return $this->ISIN;
        }
        function setLand($newLand){
            $this->land = $newLand;
        }
        function getLand(){
            return $this->land;
        }
        function setWKN($newWKN){
            $this->WKN = $newWKN;
        }
        function getWKN(){
            return $this->WKN;
        }
        function setName($newName){
            $this->name = $newName;
        }
        function getName(){
            return $this->name;
        }
        function setSparte($newSparte){
            $this->sparte = $newSparte;
        }
        function getSparte(){
            return $this->sparte;
        }
        function getAktien_ID(){
            return $this->Aktien_ID;
        }
        function setAktien_ID($Aktien_ID){
            $this->Aktien_ID = $Aktien_ID;
        }
        function createStock($ISIN, $WKN, $name, $land, $sparte){
            global $conn;
            $isCreated = "INSERT INTO aktien (ISIN, WKN, 'Name', Land, Sparte)
                        values ('$ISIN','$WKN','$name','$land', '$sparte')";
            if ($conn->query($isCreated))
            {
                return true;
            } else
            {
                return false;
            }
        }
        function editStock($ISIN, $WKN, $name, $landid, $Sparten_ID, $Aktien_ID){
            global $conn;
            $isChanged = "UPDATE aktien 
                          SET ISIN='$ISIN', 
                              WKN='$WKN', 
                              'Name'='$name',
                              Sparte='$Sparten_ID', 
                              Land=$landid
                          WHERE aktien.Aktien_ID =" . $Aktien_ID;
            if ($conn->query($isChanged))
            {
                return true;
            } else
            {
                return false;
            }
        }
        function removeStock($Aktien_ID){
            global $conn;
            $isDeleted = "DELETE FROM aktien 
                          WHERE aktien.Aktien_ID = " . $Aktien_ID;
            if ($conn->query($isDeleted))
            {
                return true;
            } else
            {
                return false;
            }
        }
        function getByIDStock($Aktien_ID){
            global $conn;
            $sql = "SELECT `aktien`.`Aktien_ID`, 
                           `aktien`.`ISIN`, 
                           `aktien`.`WKN`, 
                           `aktien`.`Name`, 
                           `land`.`LandID`, 
                           `land`.`Landname`, 
                           `sparte`.`Sparten_ID`, 
                           `sparte`.`Sparte`
                    FROM `aktien` 
                    LEFT JOIN `land` ON `aktien`.`Land` = `land`.`LandID`
                    LEFT JOIN `sparte` ON `aktien`.`Sparte` = `sparte`.`Sparten_ID`
                    WHERE aktien.Aktien_ID =" . $Aktien_ID;
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
        function ISINAlreadyExistStock($ISIN){
            global $conn;
            $adress = "SELECT `aktien`.`ISIN`
                       FROM `aktien`
                       WHERE `aktien`.`ISIN` = '$ISIN'";
            $result = $conn->query($ISIN);
            $row = $result->fetch_assoc();

            if ($row === null){
                return false;
            } else {
                return true;
            }
        }
        public static function getAllStocks($attribut, $direction){
            global $conn;
            $sql = "SELECT `aktien`.`Aktien_ID`, 
                           `aktien`.`ISIN`, 
                           `aktien`.`WKN`, 
                           `aktien`.`Name`,
                           `sparte`.`Sparte`, 
                           `land`.`Landname`
                    FROM `aktien`
                    LEFT JOIN `land` ON `aktien`.`Land` = `land`.`LandID`
                    LEFT JOIN `sparte` ON `aktien`.`Sparte` = `sparte`.`Sparten_ID`
                    ORDER BY `$attribut` $direction";
            $result = $conn->query($sql);
            $results = [];
            while ($row = $result->fetch_assoc())
            {
                array_push($results, $row);
            }
            return $results;
        }
    }
?>