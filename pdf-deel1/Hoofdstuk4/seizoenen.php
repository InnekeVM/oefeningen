<?php

//ingredienten.php

class SeizoenenArrayGenerator {

    public function getSeizoen() {
        $seizoenen = array();
        array_push($seizoenen, "winter");
        array_push($seizoenen, "lente");
        array_push($seizoenen, "zomer");
        array_push($seizoenen, "herfst");
        return $seizoenen;
    }

}
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Seizoenen</title>
    </head>
    <body>
        <pre>
            <?php
            $seizoenen = new SeizoenenArrayGenerator();
            print_r($seizoenen->getSeizoen());
            ?>
        </pre>
    </body>
</html>
