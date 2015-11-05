<HTML>
    <head><TITLE>Kalender</TITLE>
   
    </head>
    <BODY>
        <?php
        $maanden = array("januari", "februari", "maart", "april", "mei", "juni", "juli", "augustus", "september", "oktober", "november", "december");
        $dagen = array("ma", "di", "wo", "do", "vrij", "za", "zo");
        $maand = idate('m');
        $jaar = idate('Y');
        $huidigedag = idate('d');
        $startdag = idate('w', mktime(0, 0, 0, $maand, 1, $jaar)) + 1;
        $maandnaam = $maanden[$maand - 1];
        $aantal_dagen = idate('t');
        ?>

        <H1>Een kalender voor de maand <?php echo("$maandnaam"); ?></H1>
        <TABLE>
            <tr><?php
                for ($i = 0; $i < 7; $i++) {
                    echo("<td>");
                    echo("$dagen[$i]");
                    echo("</td>");
                }
                ?>
            </tr>
            <tr><?php
                $dag = 1;
                for ($i = 1; $i < 8; $i++) {
                    echo ("<td>");
                    if ($i < $startdag) {
                        echo ("</td>");
                    } else {
                        echo("$dag </td>");
                        $dag = $dag + 1;
                    }
                }
                ?>
            </tr>
            <?php
            while ($dag <= $aantal_dagen) {
                echo ("<tr>");
                for ($j = 0; $j < 7; $j++) {
                    if ($dag <= $aantal_dagen) {
                        if ($dag == $huidigedag) {
                          echo("<td style=\"background: yellow;\"> $dag </td>");  
                        }
                        else{
                        echo("<td> $dag </td>");}
                        $dag = $dag + 1;
                    } else {
                        echo ("<td></td>");
                    }
                }
                echo("</tr>");
            }
            ?>



        </TABLE>
    </BODY>


</HTML>