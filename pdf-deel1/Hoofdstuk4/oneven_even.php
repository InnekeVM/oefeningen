<?php

//tachtig.php
class GetallenArrayGenerator {

    public function getArray() {
        $tab = array();
        for ($i = 1; $i < 50; $i+=2) {
            array_push($tab, $i);
        }
        for ($i = 2; $i <= 50; $i+=2) {
            array_push($tab, $i);
        }
        return $tab;
    }

}
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Oneven-Even</title>
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
