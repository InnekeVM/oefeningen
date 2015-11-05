<HTML>
    <head><TITLE>if-constructie</TITLE>
    </head>
    <BODY>

        <?php
        $sec = date("s");
        if (($sec % 2) == 0) {
            print ("het aantal seconden is even");
        } else {

            print ("het aantal seconden is oneven");
        }
        ?>    

    </BODY>


</HTML>

