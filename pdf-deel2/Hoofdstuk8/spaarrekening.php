<?php

require_once './rekening.php';
;
class Spaarreknening extends Rekening  {
    private static $intrest = 0.03;
    
     public function voerIntrestDoor() {
         parent::stort(parent::getSaldo() * self::$intrest);
    }
    public function getOmschrijving() {
        return "Langetermijnrekening";
    }
}
