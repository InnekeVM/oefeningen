<?php

require_once './bericht.php';

class Gastenboek {

    private $dbCon;
    private $dbgebr;
    private $dbwacht;

    public function __construct() {
        $this->dbCon = "mysql:host=localhost; dbname=cursusphp; charset=utf8";
        $this->dbgebr = "cursusgebruiker";
        $this->dbwacht = "cursuspwd";
    }

    public function getLijst() {
        $sql = "select id,auteur, boodschap, datum from gastenboek";
        $dbh = new PDO("$this->dbCon", "$this->dbgebr", "$this->dbwacht");
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $resultset = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $lijst = array();
        foreach ($resultset as $rij) {
            $bericht = new Bericht($rij["id"], $rij["auteur"], $rij["boodschap"], $rij["datum"]);

            array_push($lijst, $bericht);
        }
        return $lijst;
    }

    public function voegToe($auteur, $bericht) {
        
            $sql = "insert into gastenboek (auteur, boodschap, datum) values (:auteur, :bericht, :datum)";
            $dbh = new PDO("$this->dbCon", "$this->dbgebr", "$this->dbwacht");
            $stmt = $dbh->prepare($sql);
            $datum = date("Y-m-d H:i:s");
            $stmt->execute(array(':auteur' => $auteur, ':bericht' => $bericht, ':datum'=>$datum));
        $dbh = null;    }

}

?>
