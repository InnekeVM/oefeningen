<?php

class Bericht {

    private $id;
    private $auteur;
    private $bericht;
    private $datum;

    function __construct($id, $auteur, $bericht, $datum) {
        $this->id = $id;
        $this->auteur = $auteur;
        $this->bericht = $bericht;
        $this->datum=$datum;
    }

    public function getAuteur() {
        return $this->auteur;
    }

    public function getBericht() {
        return $this->bericht;
    }

    public function getId() {
        return $this->id;
    }
    function getDatum() {
        return $this->datum;
    }


}
