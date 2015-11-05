<?php

class Film {

    private $id;
    private $titel;
    private $duurtijd;

    public function __construct($id, $titel, $duurtijd) {
        $this->id = $id;
        $this->titel = $titel;
        $this->duurtijd = $duurtijd;
    }

    public function getId() {
        return $this->id;
    }

    public function getTitel() {
        return $this->titel;
    }

    public function getDuurtijd() {
        return $this->duurtijd;
    }
}

class Filmlijst{
    function getLijst() {
        $sql = "select id, titel, duurtijd from films order by titel";

        $dbh = new PDO("mysql:host=localhost; dbname=cursusphp; charset=utf8", "cursusgebruiker", "cursuspwd");
        $resultset = $dbh->query($sql);

        $lijst = array();
        foreach ($resultset as $rij) {
            $film = new Film($rij["id"], $rij["titel"], $rij["duurtijd"]);

            array_push($lijst, $film);
        }
        return $lijst;
    }

    function voegToe($titel, $duurtijd) {
        if (is_numeric($duurtijd) && $duurtijd > 0 && !empty($titel)) {

            $sql = "insert into films (titel, duurtijd) values (:titel, :duurtijd)";
            $dbh = new PDO("mysql:host=localhost; dbname=cursusphp; charset=utf8", "cursusgebruiker", "cursuspwd");
            $stmt = $dbh->prepare($sql);

            $stmt->execute(array(':titel' => $titel, ':duurtijd' => $duurtijd));
        }
    }
    function delete($id){
        $sql = "delete from films where id = :id";
        $dbh = $dbh = new PDO("mysql:host=localhost; dbname=cursusphp; charset=utf8", "cursusgebruiker", "cursuspwd");
        $stmt = $dbh->prepare($sql);
        $stmt->execute(array(':id' => $id));
        $dbh->null;
    }

}
?>

