<?php


class modulesOpzoeken {

    public function getLijst() {

        $dbh = new PDO("mysql:host=localhost; port=3306;dbname=cursusphp; charset=utf8", "cursusgebruiker", "cursuspwd");
       
        //sql
        $sql="select naam, prijs from modules where prijs >=  :minimum and prijs <=  :maximum  order by prijs";
        $stmt=$dbh->prepare($sql);
        $stmt->execute(array(':minimum' =>$_GET["minprijs"],':maximum' => $_GET["maxprijs"]));
                
        $resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);
       
        $lijst=array();
        foreach ($resultSet as $rij){
            $module=$rij["naam"]. "(" . $rij["prijs"] . " euro)";
            array_push($lijst, $module);
        }
        $dbh = null;
        return $lijst;
    }

}
?>

