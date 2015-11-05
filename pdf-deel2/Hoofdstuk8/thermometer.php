<?php

class thermometer {
    private $temperatuur;
    function _construct(){
        $this->temperatuur=25;
    }
    public function getTemp() {
        return $this->temperatuur;
    }
    
    public function Verhoog($aantalGraden) {
        $this->temperatuur+=$aantalGraden;
    }
    
    public function Verlaag($aantalGraden) {
        $this->temperatuur+=$aantalGraden;
    }
    public function getTemperatuur() {
        return $this->temperatuur;
        
}}
?>