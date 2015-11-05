
<?php

//cursistenEnMedewerkers.php
class Persoon {

    private $voornaam;
    private $familienaam;

    public function setVoornaam($voornaam) {
        $this->voornaam = $voornaam;
    }

    public function setFamilienaam($familienaam) {
        $this->familienaam = $familienaam;
    }

    public function getVoornaam() {
        return $this->Voornaam;
    }

    public function getFamilienaam() {
        return $this->familienaam;
    }

    public function getVollNaam() {
        return $this->voornaam . ", " . $this->familienaam;
    }

}

class Cursist extends Persoon {

    private $aantalCursussen;

    public function getAantalCursussen() {
        return $this->aantalCursussen;
    }

    public function setAantalCursussen($aantalCursussen) {
        $this->aantalCursussen = $aantalCursussen;
    }
    public function __construct($voornaam, $familienaam, $aantaalCursussen) {
        parent::setVoornaam($voornaam);
        parent::setFamilienaam($familienaam);
        $this->aantalCursussen=$aantaalCursussen;
        
    }
}

class Medewerker extends Persoon {

    private $aantalCursisten;

    public function getAantalCursisten() {
        return $this->aantalCursisten;
    }

    public function setAantalCursisten($aantalCursisten) {
        $this->aantalCursisten = $aantalCursisten;
    }
    public function __construct($voornaam, $familienaam, $aantalCursisten) {
        parent::setVoornaam($voornaam);
        parent::setFamilienaam($familienaam);
        $this->aantalCursisten;        
    }
}

$cursist = new Cursist();
$medewerker = new Medewerker();
$cursist->setFamilienaam("Peeters");
$cursist->setVoornaam("Jan");
$medewerker->setFamilienaam("Janssens");
$medewerker->setVoornaam("Tom");
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Cursisten en medewerkers</title>
    </head>
    <body>
        <h1>Namen</h1>
        <ul>
            <li><?php print($cursist->getVollNaam()); ?></li>
            <li><?php print($medewerker->getVollNaam()); ?></li>
        </ul>
    </body>
</html>
