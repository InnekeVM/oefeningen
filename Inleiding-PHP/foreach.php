<HTML>
    <head><TITLE>Fruit</TITLE>
    </head>
    <BODY>
        <?php
        $reeks=array("appel" => "rood", "peer" => "groen", "sinaasappel" => "oranje", "banaan" => "geel")
        ?>
        <H1>Stukken fruit en hun kleuren</H1>
         <!-- methode foreach//-->
             <?php
          print ("<ul>");
          foreach ($reeks as $fruit => $kleur) {
              print("<li>Een $fruit is $kleur </li>");
          }
          print ("</ul>");
          ?>
          
           <!-- methode pointer//-->
           <?php
           print ("<ul>");
          for($i=0; $i< count($reeks); $i++) {
              $fruit = key($reeks);
              $kleur = current($reeks);
              print("<li>Een $fruit is $kleur </li>");
              next($reeks);
          }
          print ("</ul>");
          ?>
    </BODY>


</HTML>