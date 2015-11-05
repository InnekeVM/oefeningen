<HTML>
    <head><TITLE>Tijdsfuncties</TITLE>
    </head>
    <BODY>

        <?php
        $tijd = time();
        $deadline = mktime(20, 0, 0, 11, 05, 2015);
        $verschil = $deadline - $tijd;

        if ($verschil > 0) {
            print("Je bent op tijd");
        } else {
            print("Je bent te laat, we hadden je verwacht voor" . date("d-m-Y H-i", $deadline));
        }
        ?>    

    </BODY>


</HTML>
