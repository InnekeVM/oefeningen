<?php

class Gebruiker {
    private $id;
    private $gebruikersnaam;
    private $wachtwoord;
    
    function __construct($id, $gebruikersnaam, $wachtwoord) {
        $this->id = $id;
        $this->gebruikersnaam = $gebruikersnaam;
        $this->wachtwoord = $wachtwoord;
    }

    function getId() {
        return $this->id;
    }

    function getGebruikersnaam() {
        return $this->gebruikersnaam;
    }

    function getWachtwoord() {
        return $this->wachtwoord;
    }

    function setGebruikersnaam($gebruikersnaam) {
        $this->gebruikersnaam = $gebruikersnaam;
    }

    function setWachtwoord($wachtwoord) {
        $this->wachtwoord = $wachtwoord;
    }



}