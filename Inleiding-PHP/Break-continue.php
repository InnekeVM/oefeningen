<HTML>
    <head><TITLE>Break - Continue</TITLE>
    </head>
    <BODY>

        <?php
        $getal1 = 3;
        $getal2 = 5;
        print ("Volgende getallen zijn deelbaar door $getal1 en $getal2: ");
        for($teller=0; $teller<100; $teller = $teller+1){
                if (($teller%$getal1 <>0) or ($teller%$getal2<>0)) continue;
                print("$teller, ");
        }
        ?>
       
    
    </BODY>


</HTML>