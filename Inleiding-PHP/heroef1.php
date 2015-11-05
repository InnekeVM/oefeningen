<HTML>
    <head><TITLE>Herhalingsoefening 1</TITLE>
    </head>
    <BODY>
        <?php
        $teller1 = 1;
        while ($teller1 < 10) {
            print("abc ");
            $teller1++;
        }
        
        print ("<br>");
        
        $teller2 = 1;
        do {
            print ("xyz ");
            $teller2 = $teller2 + 1;
        } while ($teller2 < 10);
        
        
        print ("<br>");
        
      
        for ($teller3 = 1; $teller3 < 10; $teller3++) {
        print ("$teller3   ");
        }
        
        print ("<br> <ol>");
        
        for ($teller='A'; $teller <'G'; $teller++) {
        print ("<li>Item $teller</li>");
        }
        
         print ("<br> </ol>");       
        
        ?>          
      
    </BODY>


</HTML>
