<?php

class Bord {

    private $dbCon;
    private $dbgebr;
    private $dbwacht;

    public function __construct() {
        $this->dbCon = "mysql:host=localhost; dbname=cursusphp; charset=utf8";
        $this->dbgebr = "cursusgebruiker";
        $this->dbwacht = "cursuspwd";
    }

    public function getStatus($rij, $kolom) {
        $sql = "select status from vieropeenrij_spelbord where rijnummer = :rij and kolomnummer = :kolom";
        $dbh = new PDO($this->dbCon, $this->dbgebr, $this->dbwacht);
        $stmt = $dbh->prepare($sql);
        $stmt->execute(array(
            ':rij' => $rij,
            ':kolom' => $kolom
        ));
        $status = $stmt->fetch(PDO::FETCH_ASSOC);
        return $status;
    }

    public function gooiMunt($kolom, $status) {
        //zoek vrije rij
        $gevondenRij = -1;
        $i = 1;
        while ($gevondenRij = -1 && $i<7){
            if($this->getStatus($i, $kolom)==0){
                $gevondenRij = $i;
            }else {$i++;}
        }
        
        if(!$gevondenRij== -1){
        
        $sql = "update vieropeenrij_spelbord set status = :status where rijnummer = :rij and kolomnummer = :kolom";
        $dbh = new PDO($this->dbCon, $this->dbgebr, $this->dbwacht);
        $stmt = $dbh->prepare($sql);
        $stmt->execute(array(
            ':status' => $status,
            ':rij' => $gevondenRij,
            ':kolom' => $kolom
        ));
    }
    }

    public function reset() {
        $sql = "update vieropeenrij_spelbord set status = 0";
        $dbh = new PDO($this->dbCon, $this->dbgebr, $this->dbwacht);
        $stmt = $dbh->prepare($sql);      
        $stmt->execute();
    }

}

?>
