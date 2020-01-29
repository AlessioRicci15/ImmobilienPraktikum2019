<?php
    class Bond
    {
        private $ISIN;
        private $land;
        private $WKN;
        private $name;
        private $endjahr;
        private $kupon;
        private $Anleih_ID;
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
        function setEndJahr($newEndJahr){
            $this->endjahr = $newEndJahr;
        }
        function getEndJahr(){
            return $this->endjahr;
        }
        function setKupon($newKupon){
            $this->kupon = $newKupon;
        }
        function getKupon(){
            return $this->kupon;
        }
        function getAnleih_ID(){
            return $this->Anleih_ID;
        }
        function setAnleih_ID($Anleih_ID){
            $this->Anleih_ID = $Anleih_ID;
        }
        function createBond($ISIN, $WKN, $name, $land, $endjahr, $kupon){
            global $conn;
            $isCreated = "INSERT INTO anleih (ISIN, WKN, 'Name', Land, EndJahr, Kupon)
                        values ('$ISIN','$WKN','$name','$land','$endjahr','$kupon')";
            if ($conn->query($isCreated))
            {
                return true;
            } else
            {
                return false;
            }
        }
        function editBond($ISIN, $WKN, $name, $landid, $Anleih_ID, $endjahr, $kupon){
            global $conn;
            $isChanged = "UPDATE anleih 
                          SET ISIN='$ISIN', 
                              WKN='$WKN', 
                              'Name'='$name', 
                              Land=$landid,
                              EndJahr=$endjahr,
                              Kupon=$kupon
                          WHERE anleih.Anleih_ID =" . $Anleih_ID;
            if ($conn->query($isChanged))
            {
                return true;
            } else
            {
                return false;
            }
        }
        function removeBond($Anleih_ID){
            global $conn;
            $isDeleted = "DELETE FROM anleih 
                          WHERE anleih.Anleih_ID = " . $Anleih_ID;
            if ($conn->query($isDeleted))
            {
                return true;
            } else
            {
                return false;
            }
        }
        function getByIDBond($Anleih_ID){
            global $conn;
            $sql = "SELECT `anleih`.`Anleih_ID`, 
                           `anleih`.`ISIN`, 
                           `anleih`.`WKN`, 
                           `anleih`.`Name`, 
                           `land`.`LandID`, 
                           `land`.`Landname`, 
                           `anleih`.`EndJahr`, 
                           `anleih`.`Kupon`
                    FROM `anleih` 
                    LEFT JOIN `land` ON `anleih`.`Land` = `land`.`LandID`
                    WHERE anleih.Anleih_ID =" . $Anleih_ID;
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
        function ISINAlreadyExistBond($ISIN){
            global $conn;
            $adress = "SELECT `anleih`.`ISIN`
                       FROM `anleih`
                       WHERE `anleih`.`ISIN` = '$ISIN'";
            $result = $conn->query($ISIN);
            $row = $result->fetch_assoc();

            if ($row === null){
                return false;
            } else {
                return true;
            }
        }
        public static function getAllBond($attribut, $direction){
            global $conn;
            $sql = "SELECT `anleih`.`Anleih_ID`, 
                           `anleih`.`ISIN`, 
                           `anleih`.`WKN`, 
                           `anleih`.`Name`, 
                           `land`.`Landname`,
                           `anleih`.`EndJahr`, 
                           `anleih`.'Kupon'
                    FROM `anleih`
                    LEFT JOIN `land` ON `anleih`.`Land` = `land`.`LandID`
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