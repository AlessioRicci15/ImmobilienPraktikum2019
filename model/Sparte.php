<?php
    class Sparte
    {
        private $Sparten_ID;
        private $Sparte;
        function setSparten_ID($newSparten_ID){
            $this->Sparten_ID = $newSparten_ID;
        }
        public function getSparten_ID(){
            return $this->Sparten_ID;
        }
        function setSparte($newSparte){
            $this->Sparte = $newSparte;
        }
        function getSparte(){
            return $this->Sparte;
        }
        public function orderedsparten(){
            global $conn;
            $spartenliste = "SELECT `sparte`.`Sparten_ID`, 
                                   `sparte`.`Sparte`
                            FROM `sparte`
                            ORDER BY `Sparte` ASC";
            $result = $conn->query($spartenliste);
            $sparten = [];
            while ($row = $result->fetch_assoc()) {
                array_push($sparten, $row);
            }
            return $sparten;
        }
    }
?>
