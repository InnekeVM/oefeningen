<?php

class random {

    public function getRandom() {

        $tab = array();
        for ($i = 0; $i <= 6; $i++) {
            $getal = rand(1, 42);
            $tab[$i] = $getal;
        }

        return $tab;
    }

}
?>
<!DOCTYPE HTML>
<!--tafels.php-->
<html>
    <head>
        <meta charset=utf-8>
        <title>Winnende Lottogetallen</title>
    </head>
    <body>
        <h1>De Winnende Lotogetallen</h1>
        <table border="1">
            <tr>           
                <?php
                $random = new random();
                $winnendeGetallen = $random->getRandom();

                $nummer = 1;
                for ($i = 1; $i <= 6; $i++) {
                    echo ("<tr>");
                    for ($j = 0; $j < 7; $j++) {
                        if (in_array($nummer, $winnendeGetallen)) {
                            echo("<td style=\"background: yellow;\"> $nummer </td>");
                        } else {

                            echo ("<td> $nummer </td>");
                        }
                        $nummer++;
                    }
                    echo("</tr>");
                }
                ?>
        </table>


    </body>
</html>