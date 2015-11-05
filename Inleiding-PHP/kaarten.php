<HTML>
    <head><TITLE>kaarten</TITLE>
    </head>
    <BODY>
        <?php
        $soorten = array("Harten", "Koeken", "Klaveren", "Schoppen");
        $waarden = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, "Boer", "Dame", "Heer");
        $kaarten = array();

        for ($i = 0; $i < count($soorten); $i++) {
            for ($i2 = 0; $i2 < count($waarden); $i2++) {
                array_push($kaarten, "$soorten[$i] $waarden[$i2]");
            }
        }
        $aantal = count($kaarten);
        $kaart = rand(0, $aantal - 1);

        print ("De getrokken kaart is $kaarten[$kaart]");
        ?>
    </BODY>


</HTML>