<?php
//cookies.php
$gekozenkleur = "white";

if (isset($_POST["kleur"])) {
    setcookie("gekozenkleur", $_POST["kleur"], time() + 86400);
    $gekozenkleur = $_POST["kleur"];
} elseif (isset($_COOKIE["gekozenkleur"])) {
    $gekozenkleur = $_COOKIE["gekozenkleur"];
}
?>


<!DOCTYPE HTML>
<html>
    <head>
        <meta charset=utf-8>
        <title>Kleur</title>
    </head>
    <body style="background-color: <?php print($gekozenkleur); ?>">


        <form action="kleur.php" method="post">
            <label>                        Kies uw favoriete kleur: 
                <select name="kleur">
                    <option value="#ef6a6a">Rood</option>
                    <option value="#6aefed">Blauw</option>
                    <option value="#6aef6d">Groen</option>
                    <option value="#e7ef6a">Geel</option>
                    <option value="white">Wit</option>
                </select>  
            </label>

            <input type="submit" value="OK" />


        </form>
        <br />

    </body>
</html>