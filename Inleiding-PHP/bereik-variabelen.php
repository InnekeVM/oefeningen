<HTML>
    <head><TITLE>Bereik Variabelen</TITLE>
    </head>
    <BODY>
        <?php
   $var1 = 5;
   $var2 = 2;
   function som() {
       global $var1;
       global $var2;
       global $resultaat;
       $resultaat=$var1 + $var2;
   }
   som();
   print("$resultaat");
?>

    </BODY>


</HTML>