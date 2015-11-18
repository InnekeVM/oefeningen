<?php
require_once 'entities/User.php';
require_once 'DBConfig.php';

class UserDAO {
 
    public function checkCreditials($gebruikersnaam, $wachtwooord){
         $sql = "select * from gebruikers where gebruikersnaam = :gebruikersnaam";
        $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);

        $stmt = $dbh->prepare($sql);
        $stmt->execute(array(':gebruikersnaam' => $gebruikersnaam));
        $rij = $stmt->fetch(PDO::FETCH_ASSOC);
        if(!empty($rij)){
            $gebruiker = new Gebruiker($rij["id"], $gebruikersnaam, $rij["wachtwoord"]);
            return $gebruiker;
            if($wachtwooord == $gebruiker->getWachtwoord()){
                return TRUE;
            } else {
            return FALSE;    
            }
        } return FALSE;
    }
   
}
