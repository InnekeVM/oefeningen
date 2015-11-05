<?php

class Geheim {
    public function getResultaat() {
        $val =22;
        $val = 50;
        $val = $val*2;
        return $val;
    }
}
?>
<!DOCTYPE HTML>
<HTML>
    <head>
        <meta charset="utf-8">
        <TITLE>Geheim</TITLE>
    </head>
    <BODY>
        <H1>
            <?php
            $geheim = new Geheim();
            print($geheim->getResultaat());
            ?>
        </H1>
    </BODY>
</HTML>