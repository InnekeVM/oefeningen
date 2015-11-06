<?php

class Persoon {
    private $familienaam;
    private $voornaam;
    
    function __construct($familienaam, $voornaam) {
        $this->familienaam = $familienaam;
        $this->voornaam = $voornaam;
    }
    function getFamilienaam() {
        return $this->familienaam;
    }

    function getVoornaam() {
        return $this->voornaam;
    }

    function setFamilienaam($familienaam) {
        $this->familienaam = $familienaam;
    }

    function setVoornaam($voornaam) {
        $this->voornaam = $voornaam;
    }

}

