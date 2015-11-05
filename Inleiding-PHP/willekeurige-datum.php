<HTML>
    <head><TITLE>Willekeurige datum</TITLE>
    </head>
    <BODY>
        <?php
        $beginjaar = 2010;
        $eindjaar = 2020;

        function datum($jaar, $maanden = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12)) {
            $maandnaam = array("januari", "februari", "maart", "april", "mei", "juni", "juli", "augustus", "september", "oktober", "november", "december");

            //random maand kiezen

            $maandnummer = rand(1,  count($maanden));
            /* @var $maandnummer type */
            $maand = $maanden[$maandnummer-1];
            $maand_woord = $maandnaam[$maand-1];

            //willekeurige datum in jaar
            $willekeurige_datum = mktime(0, 0, 0, $maand,1, $jaar);
            //aantal dagen in tijd
            $aantal_dagen = date('t', $willekeurige_datum);

            //willekeurige dag
            $dag = rand(1, $aantal_dagen);
            echo ("$dag $maand_woord $jaar <br>");
        }

        for ($i = 2010; $i <= 2020; $i++) {
            datum($i);
        }
        echo ("<br>");
        for ($i = 2010; $i <= 2020; $i++ ) {
            datum($i, $maanden = array(7,8));
        }
        ?>
    </BODY>


</HTML>