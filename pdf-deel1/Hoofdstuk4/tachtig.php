<?php

//tachtig.php
class GetallenArrayGenerator {

    public function getArray() {
        $tab = array();

        do {
            $getal = rand(1, 100);
            array_push($tab, $getal);
        } while ($getal <= 80);
        return $tab;
    }

}
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tachtig</title>
    </head>
    <body>
        <pre>
            <?php
            $arrGen = new GetallenArrayGenerator();
            print_r($arrGen->getArray());
            ?>
        </pre>
    </body>
</html>

