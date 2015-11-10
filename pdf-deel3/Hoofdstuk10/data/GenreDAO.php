<?php

use Genre;

require_once 'DBConfig.php';
require_once 'entities/Genre.php';

class GenreDAO {

    public function getAll() {
        $sql = "select id, genrenaam from mvc_genres";
        $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
        $resultSet = $dbh->query($sql);
        $lijst = array();
        foreach ($resultSet as $rij) {
            $genre = Genre::create($rij["id"], $rij["genrenaam"]);
            array_push($lijst, $genre);
        }
        $dbh = null;        
       
        return $lijst;
    }

    public function getById($id) {
        $sql = "select genrenaam from mvc_genres where id = :id";
        $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);

        $stmt = $dbh->prepare($sql);
        $stmt->execute(array(':id' => $id));
        $rij = $stmt->fetch(PDO::FETCH_ASSOC);

        $genre = Genre::create($id, $rij["genrenaam"]);
        $dbh = null;
        return $genre;
    }

}
