<?php

require_once './chatbericht.php';

class Chatbox {

    private $dbCon;
    private $dbgebr;
    private $dbwacht;

    public function __construct() {
        $this->dbCon = "mysql:host=localhost; dbname=chatbox; charset=utf8";
        $this->dbgebr = "Inneke";
        $this->dbwacht = "cursus";
    }

    public function getLijst() {
        $sql = "select * from chatberichten";
        $dbh = new PDO($this->dbCon, $this->dbgebr, $this->dbwacht);
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $lijst = array();
        foreach ($resultSet as $rij) {
            $bericht = new Bericht($rij["id"], $rij["nickname"], $rij["boodschap"], $rij["datum"]);
            array_push($lijst, $bericht);
        }
        return $lijst;
    }

    public function nieuwBericht($nickname, $bericht) {
        $sql = "insert into chatberichten (nickname, boodschap, datum) values (:nickname, :boodschap, :datum)";
        $dbh = new PDO($this->dbCon, $this->dbgebr, $this->dbwacht);
        $stmt = $dbh->prepare($sql);
        $datum = date("Y-m-d H:i:s");
        $stmt->execute(array(
            ':nickname' => $nickname,
            ':boodschap' => $bericht,
            ':datum' => $datum
                ));
        $dbh = null;
    }

}
?>

