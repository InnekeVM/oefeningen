<HTML>
    <head><TITLE>Zelf functies maken</TITLE>
    </head>
    <BODY>
        <?php
        function breekaf($string) {
            $deeltekst = substr($string, 0,3);
            return ("$deeltekst ...");
        }
        ?>


        <?php
print("Webleren is fun --- " . breekaf("Webleren is fun") . "<br>");
print("VDAB --- " . breekaf("VDAB"));
?>

    </BODY>


</HTML>