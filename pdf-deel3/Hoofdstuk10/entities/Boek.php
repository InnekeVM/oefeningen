<?php

class Boek {

    private static $idMap = array();
    private $id;
    private $titel;
    private $genre;

    private function __construct($id, $titel, $genre) {
        $this->id = $id;
        $this->titel = $titel;
        $this->genre = $genre;
    }

    public static function create($id, $titel, $genre) {
        if (!isset(self::$idMap["id"])) {
            self::$idMap["id"] = new Boek($id, $titel, $genre);
        }
        return self::$idMap["id"];
    }

    function getId() {
        return $this->id;
    }

    function getTitel() {
        return $this->titel;
    }

    function getGenre() {
        return $this->genre;
    }

    function setTitel($titel) {
        $this->titel = $titel;
    }

    function setGenre($genre) {
        $this->genre = $genre;
    }

}
