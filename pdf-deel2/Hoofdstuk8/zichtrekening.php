<?php

require_once './rekening.php';


class Zichtrekening extends Rekening {

    private static $intrest = 0.025;

    public function voerIntrestDoor() {
        parent::stort(parent::getSaldo() * self::$intrest);
    }
    public function getOmschrijving() {
        return "Kortetermijnrekening";
    }
}
