<?php
    class Property
    {
        private $ISIN;
        private $land;
        private $sparte;
        private $name;
        private $valorennumer;
        private $ETF_ID;
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
        function setSparte($newSparte){
            $this->sparte = $newSparte;
        }
        function getSparte(){
            return $this->sparte;
        }
        function setName($newName){
            $this->name = $newName;
        }
        function getName(){
            return $this->name;
        }
        function setValorennumer($newValorennumer){
            $this->valorennumer = $newValorennumer;
        }
        function getValorennumer(){
            return $this->valorennumer;
        }
        function getETF_ID(){
            return $this->ETF_ID;
        }
        function setETF_ID($ETF_ID){
            $this->ETF_ID = $ETF_ID;
        }
        function createETF($ISIN, $valorennumer, $name, $land, $sparte){
            global $conn;
            $isCreated = "INSERT INTO etfs (ISIN, Valorennumer, 'Name', Land, Sparte)
                        values ('$ISIN','$valorennumer','$name','$land', '$sparte')";
            if ($conn->query($isCreated))
            {
                return true;
            } else
            {
                return false;
            }
        }
        function editETF($ISIN, $valorennumer, $name, $landid, $Sparten_ID, $ETF_ID){
            global $conn;
            $isChanged = "UPDATE etfs 
                          SET ISIN='$ISIN', 
                              Valorennumer='$valorennumer', 
                              'Name'='$name', 
                              Land=$landid,
                              Sparte=$sparte
                          WHERE etfs.ETF_ID =" . $ETF_ID;
            if ($conn->query($isChanged))
            {
                return true;
            } else
            {
                return false;
            }
        }
        function removeETF($ETF_ID){
            global $conn;
            $isDeleted = "DELETE FROM etfs 
                          WHERE etfs.ETF_ID = " . $ETF_ID;
            if ($conn->query($isDeleted))
            {
                return true;
            } else
            {
                return false;
            }
        }
        function getByIDETF($ETF_ID){
            global $conn;
            $sql = "SELECT `etfs`.`ETF_ID`, 
                           `etfs`.`ISIN`, 
                           `etfs`.`Valorennumer`, 
                           `etfs`.`Name`, 
                           `land`.`LandID`, 
                           `land`.`Landname`, 
                           `sparte`.`Sparten_ID`, 
                           `sparte`.`Sparte`
                    FROM `etfs` 
                    LEFT JOIN `land` ON `etfs`.`Land` = `land`.`LandID`
                    LEFT JOIN `sparte` ON `etfs`.`Sparte` = `sparte`.`Sparten_ID`
                    WHERE etfs.ETF_ID =" . $ETF_ID;
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
        function ISINAlreadyExistETF($ISIN){
            global $conn;
            $adress = "SELECT `etfs`.`ISIN`
                       FROM `etfs`
                       WHERE `etfs`.`ISIN` = '$ISIN'";
            $result = $conn->query($ISIN);
            $row = $result->fetch_assoc();

            if ($row === null){
                return false;
            } else {
                return true;
            }
        }
        public static function getAllETF($attribut, $direction){
            global $conn;
            $sql = "SELECT `etfs`.`ETF_ID`, 
                            `etfs`.`ISIN`, 
                            `etfs`.`Valorennumer`, 
                            `etfs`.`Name`, 
                            `land`.`Landname`, 
                            `sparte`.`Sparte`
                    FROM `etfs`
                    LEFT JOIN `land` ON `etfs`.`Land` = `land`.`LandID`
                    LEFT JOIN `sparte` ON `etfs`.`Sparte` = `sparte`.`Sparten_ID`
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