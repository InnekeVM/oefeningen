<?php
 class ModuleLijst {
     public function createModule($naam, $prijs) {
         $sql = "insert into modules (naam, prijs) values (:naam, :prijs";
         $dbh = new PDO("mysql:host=localhost; dbname=cursusphp; charset=utf-8", "cursusgebruiker", "cursuspwd");
         
         $stmt=$dbh->prepare($sql);
         $stmt->execute(array(':naam' => $naam,':rpijs'=>$prijs));
         $dbh = null;
         
     }
 }
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Modules</title>
    </head>
    <body>
        <h1>Module toevoegen</h1>
        <?php
        $mlijst = new ModuleLijst();
        $mlijst->createModule("Acces", 85.0);
        ?>
    </body>
</html>