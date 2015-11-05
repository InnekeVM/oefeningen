<?php

require_once './zichtrekening.php';
require_once './spaarrekening.php';

?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset=utf-8>
        <title>Rekeningnummers</title>
    </head>
    <body>
        <h1>
            <?php
            $zrek = new Zichtrekening("091-0122401-16");
            print("Het saldo is: " . $zrek->getSaldo() . "<br />");
            $zrek->stort(200);
            print("Het saldo is: " . $zrek->getSaldo() . "<br />");
            $zrek->voerIntrestDoor();
            print("Het saldo is: " . $zrek->getSaldo() . "<br />");
            print($zrek->getOmschrijving());
            ?>
        </h1>
    </body>
</html>
