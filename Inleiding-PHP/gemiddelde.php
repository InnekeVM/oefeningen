<HTML>
    <head><TITLE>Gemiddelde</TITLE>
    </head>
    <BODY>
        <?php
        function gemiddelde($waarden=  array()){
            $som = 0;
            for ($i=0; $i< count($waarden); $i++){
                $som = $som+$waarden[$i];
            }
            return $som/count($waarden);
        }
        
      $array1 = array(1,2,3,4,5);
      $array2 = array(10,5,3);
      $array3 = array(3,4,5,2,5,1,2,1,0,2);
      
      echo("het eerste gemiddelde is " . gemiddelde($array1) . ", het tweede gemiddelde is " . gemiddelde($array2) . ", het derde gemiddelde is " . gemiddelde($array3) . ".");
        
        
        
          ?>
    </BODY>


</HTML>