<?php

require_once './film1.php';

class filmlijst {
    private $dbCon;
    private $dbgebr;
    private $dbwacht;
    
    public function __construct() {
        $this->dbCon="mysql:host=localhost; dbname=cursusphp; charset=utf8";
        $this->dbgebr="cursusgebruiker";
        $this->dbwacht="cursuspwd";
    }

    public function getLijst() {
        $sql = "select id, titel, duurtijd from films order by titel";

        $dbh = new PDO("$this->dbCon", "$this->dbgebr", "$this->dbwacht");
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $resultset = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $lijst = array();
        foreach ($resultset as $rij) {
            $film = new Film($rij["id"], $rij["titel"], $rij["duurtijd"]);

            array_push($lijst, $film);
        }
        return $lijst;
    }

    public function voegToe($titel, $duurtijd) {
        if (is_numeric($duurtijd) && $duurtijd > 0 && !empty($titel)) {

            $sql = "insert into films (titel, duurtijd) values (:titel, :duurtijd)";
            $dbh = new PDO("$this->dbCon", "$this->dbgebr", "$this->dbwacht");
            $stmt = $dbh->prepare($sql);

            $stmt->execute(array(':titel' => $titel, ':duurtijd' => $duurtijd));
        }
    }

    public function verwijder($id) {
        $sql = "delete from films where id = :id";
        $dbh = $dbh = new PDO("$this->dbCon", "$this->dbgebr", "$this->dbwacht");
        $stmt = $dbh->prepare($sql);
        $stmt->execute(array(':id' => $id));
        $dbh = null;
    }
    
    public function getFilmById($id) {
     $sql="select titel, duurtijd from films where id = :id";
     $dbh = $dbh = new PDO("$this->dbCon", "$this->dbgebr", "$this->dbwacht");
        $stmt = $dbh->prepare($sql);
        $stmt->execute(array(':id' => $id));
        $rij=$stmt->fetch(PDO::FETCH_ASSOC);
        $film = new Film($id, $rij["titel"], $rij["duurtijd"]);
        $dbh = null;
        return $film;
    }
    
    public function update($film) {
        $sql = "update films set titel = :titel, duurtijd = :duurtijd where id = :id";
        $dbh = $dbh = new PDO("$this->dbCon", "$this->dbgebr", "$this->dbwacht");
        $stmt = $dbh->prepare($sql);
        $stmt->execute(array(
            ':titel'=>$film->getTitel(), 
            ':duurtijd'=>$film->getDuurtijd(),
            ':id'=>$film->getId()
                ));
    }
}

?>