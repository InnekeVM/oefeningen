<?php

require_once 'DBConfig.php';
require_once 'entities/Boek.php';
require_once 'entities/Genre.php';

class BoekDAO {

    public function getALL() {
        $sql = "select mvc_boeken.id as boek_id, titel,  
			genre_id, genre from mvc_boeken,  
			mvc_genres where genre_id = mvc_genres.id";

        $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
        $resultSet = $dbh->query($sql);

        $lijst = array();

        foreach ($resultSet as $rij) {
            $genre = Genre::create($rij["genre_id"], $rij["genre"]);
            $boek = Boek::create($rij["boek_id"], $rij["titel"], $genre);
            array_push($lijst, $boek);
        }
        $dbh = null;
        return $lijst;
    }

    public function getById($id) {
        $sql = "select mvc_boeken.id as boek_id, titel, genre_id, genre from mvc_boeken, mvc_genres where genre_id= mvc_genres.id and mvc_boeken.id = :id";

        $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_USERNAME);
        $stmt = $dbh->prepare($sql);
        $stmt->execute(array(':id' => $id));
        $rij = $stmt->fetch(PDO::FETCH_ASSOC);
        $genre = Genre::create($rij["genre_id"], $rij["genre"]);
        $boek = Boek::create($rij["boek_id"], $rij["titel"], $genre);
        $dbh = null;
        return $boek;
    }

    public function create($titel, $genreId) {
        $sql = "insert into mvc_boeken (titel, genre_id) values (:titel, :genreId)";
    
        $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
        $stmt = $dbh->prepare($sql);
        $stmt->execute(array(':titel'=> $titel, ':genreId' => $genreId));
        $boekId = $dbh->lastInsertId();
        $dbh=null;
        
        $genreDAO = new GenreDAO();
        $genre = $genreDAO->getById($genreId);
        $boek = Boek::create($boekId, $titel, $genre);
        return $boek;
               
    }

}