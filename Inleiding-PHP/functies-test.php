<HTML>
    <head><TITLE>Zelf functies maken</TITLE>
    </head>
    <BODY>
        <?php

        function evenlang($string1, $string2) {
            $lengte1 = strlen($string1);
            $lengte2 = strlen($string2);
            return ($lengte1 == $lengte2);
        }
        ?>

        <?php
        if (evenlang("testje", "testjes")) {
            print("Deze strings zijn even lang.");
        } else {
            print("deze strings zijn niet even lang.");
        }
        ?>

    </BODY>


</HTML>

