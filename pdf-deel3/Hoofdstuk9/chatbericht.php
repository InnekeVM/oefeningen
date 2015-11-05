<?php

class Bericht {

    private $id;
    private $nickname;
    private $boodschap;
    private $datum;

    function __construct($id, $nickname, $boodschap, $datum) {
        $this->id = $id;
        $this->nickname = $nickname;
        $this->boodschap = $boodschap;
        $this->datum = $datum;
    }

    function getId() {
        return $this->id;
    }

    function getNickname() {
        return $this->nickname;
    }

    function getBoodschap() {
        return $this->boodschap;
    }

    function getDatum() {
        return $this->datum;
    }

}

?>
