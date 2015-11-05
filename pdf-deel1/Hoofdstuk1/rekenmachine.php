<?php

class Rekenmachine {

//berekent het kwadraat van een meegegevn getal
    public function getKwadraat($getal) {
        $kwad = $getal * $getal;
        return $kwad;
    }

    /* bereknt de som van twee meegegeven getallen
     * Dit is een tweede zelfgeschreven functie
     */

    public function getSom($getal1, $getal2) {
        $resultaat = $getal1 + $getal2;
        return $resultaat;
    }
    public function getProduct($getal1, $getal2) {
        $resultaat = $getal1 * $getal2;
        return $resultaat;        
    }

}
?>
<!DOCTYPE HTML>
<HTML>
    <head>
        <meta charset="utf-8">
        <TITLE>Rekenmachine</TITLE>
    </head>
    <BODY>
        <h1>
            <?php
            $reken = new Rekenmachine();
            print($reken->getKwadraat(5));
            ?>
        </h1>
        <H1>
            <?php
            print($reken->getSom(65, 8));
            ?>
        </H1>
         <H1>
            <?php
            print($reken->getProduct(8, 25));
            ?>
        </H1>
    </BODY>


</HTML>