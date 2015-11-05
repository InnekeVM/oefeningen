<?php

class frequentie {

    public function getFrequentie() {
        $tab = array();
         for ($i = 0; $i <= 40; $i++) {
            
            $tab[$i]= 0;
        }
        for ($i = 0; $i < 100; $i++) {
            $getal = rand(1, 40);
            $tab[$getal]++;
        }
        return $tab;
    }

}

?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Frequentie</title>
    </head>
    <body>
        <?php
        $frequentie =  new frequentie();
        $tabel = $frequentie->getFrequentie();
        foreach ($tabel as $sleutel=>$waarde){
            echo ("<li> Getal " . $sleutel . " werd " . $waarde . " keer gegenereerd.</li>");
        }
        ?>
    </body>
</html>
