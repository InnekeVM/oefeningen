<HTML>
    <head><TITLE>Nieuwjaar</TITLE>
    </head>
    <BODY>
        <?php
        $nieuwjaar = mktime(0, 0, 0, 1, 1, 2016);
        $vandaag = time();
        $verschil = $nieuwjaar - $vandaag;
        $seconden = $verschil%60;
        $minuten = ($verschil / 60)%60;
        $uren = ($verschil/60/60)%24;
        $dagen = round(($verschil/60/60/24),0);
        echo("Nog $dagen dagen, $uren uren en $minuten minuten en we laten de champagne knallen!");
        ?>
        
            </BODY>


</HTML>