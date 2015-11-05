<HTML>
    <head><TITLE>De while-lus</TITLE>
    </head>
    <BODY>

        <?php
        $getal1 = 0;
        $getal2 = 1;
        print ("$getal1 ");
        while ($getal2 < 1000000) {
            print ("$getal2 ");
            $getal3 = $getal1 + $getal2;
            $getal1 = $getal2;
            $getal2 = $getal3;
        }
        ?>    

    </BODY>


</HTML>
