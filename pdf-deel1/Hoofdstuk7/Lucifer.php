<?php

session_start();
if (isset($_GET["reset"]) && $_GET["reset"] == 1) {
    unset($_SESSION["aantal"]);

}
if(!isset($_SESSION["aantal"])){
    $_SESSION["aantal"]= 7;
}

if(isset($_GET['min'])){
    $_SESSION["aantal"]=$_SESSION["aantal"]-$_GET["min"];
}


?>
<!doctype=html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Lucifer</title>
    </head>
    <body>
<?php 
for ($i=1; $i<=$_SESSION["aantal"]; $i++){
     ?>
        <img src="lucifer.png"/>
<?php

}
?>
       
        <form action="lucifer.php" method="get">
            <button name="min" type="submit" value="1">Eén lucifer weg nemen</button><button name="min" type="submit" value="2">Twee lucifers wegnemen</button>
        </form>
        <p>
            Klik <a href="Lucifer.php?reset=1">hier</a> om een nieuw spel te beginnen.
        </p>
    </body>
</html>