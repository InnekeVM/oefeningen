<HTML>
    <head><TITLE>Herhalingsoefening 1 (voor de coach)</TITLE>
        <STYLE>
            table {
                border-spacing: 0;            
            }
            td {
                padding: 0.4em;
            }
            tr:nth-child(odd) {background: black;
                               color: yellow;
            }
            tr:nth-child(even) {
                background: yellow;
                color: black;
            }
        </style>
    </head>
    <BODY>
        <h1>
            Een dynamische tabel
        </h1>
        <?php
        $kol = 10;
        $rij = 20;
        $getal = 1;
        ?>
        <p>
            <?php print ("deze tabel bevat $rij rijen en $kol kolommen"); ?>
        </p>
        <?php
        while (($kol < 1) or ( $rij < 1)) {
            print ("Ongeldig aantal rijen");
        }
        print("<table>");
        for ($telrij = 1; $telrij <= $rij; $telrij++) {

            print("<tr>");
            for ($telkol = 1; $telkol <= $kol; $telkol++) {

                print("<td>");
                print ($getal);
                print("</td>");
                $getal++;
            }

            print("</tr>");
        }
        print ("</table>")
        ?>             







    </BODY>
</HTML>

