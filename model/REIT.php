<?php
    class REIT
    {
        private $REITs_ID;
        private $land;
        private $ISIN;
        private $WKN;
        private $name;
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
        function getREITs_ID(){
            return $this->REITs_ID;
        }
        function setREITs_ID($REITs_ID){
            $this->REITs_ID = $REITs_ID;
        }
        function createREIT($ISIN, $WKN, $name, $land){
            global $conn;
            $isCreated = "INSERT INTO reits (ISIN, WKN, 'Name', Land)
                        values ('$ISIN','$WKN','$name','$land')";
            if ($conn->query($isCreated))
            {
                return true;
            } else
            {
                return false;
            }
        }
        function editREIT($ISIN, $WKN, $name, $landid, $REITs_ID){
            global $conn;
            $isChanged = "UPDATE reits 
                          SET ISIN='$ISIN', 
                              WKN='$WKN', 
                              'Name'='$name', 
                              Land=$landid
                          WHERE reits.REITs_ID =" . $REITs_ID;
            if ($conn->query($isChanged))
            {
                return true;
            } else
            {
                return false;
            }
        }
        function removeREIT($REITs_ID){
            global $conn;
            $isDeleted = "DELETE FROM reits 
                          WHERE reits.REITs_ID = " . $REITs_ID;
            if ($conn->query($isDeleted))
            {
                return true;
            } else
            {
                return false;
            }
        }
        function getByIDREIT($REITs_ID){
            global $conn;
            $sql = "SELECT `reits`.`REITs_ID`, 
                           `reits`.`ISIN`, 
                           `reits`.`WKN`, 
                           `reits`.`Name`, 
                           `land`.`LandID`, 
                           `land`.`Landname`
                    FROM `reits` 
                    LEFT JOIN `land` ON `reits`.`Land` = `land`.`LandID`
                    WHERE reits.REITs_ID =" . $REITs_ID;
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
        function ISINAlreadyExistREIT($ISIN){
            global $conn;
            $adress = "SELECT `reits`.`ISIN`
                       FROM `reits`
                       WHERE `reits`.`ISIN` = '$ISIN'";
            $result = $conn->query($ISIN);
            $row = $result->fetch_assoc();

            if ($row === null){
                return false;
            } else {
                return true;
            }
        }
        public static function getAllREIT($attribut, $direction){
            global $conn;
            $sql = "SELECT `reits`.`REITs_ID`, 
                           `reits`.`ISIN`, 
                           `reits`.`WKN`, 
                           `reits`.`Name`, 
                           `land`.`Landname`
                    FROM `reits`
                    LEFT JOIN `land` ON `reits`.`Land` = `land`.`LandID`
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