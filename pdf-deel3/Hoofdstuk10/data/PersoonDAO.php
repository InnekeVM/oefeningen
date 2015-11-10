<?php
require_once 'entities/Persoon.php';
require_once 'DBConfig.php';
class PersoonDAO {
    
    public function getAll() {
        $sql = "select familienaam, voornaam from personen";
        $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
        $resultset = $dbh->query($sql);
        $lijst = array();
        foreach ($resultset as $rij) {
            $persoon = new Persoon($rij["familienaam"], $rij["voornaam"]);
            array_push($lijst, $persoon);            
        }
        $dbh = null;
        return $lijst;
    }
}
