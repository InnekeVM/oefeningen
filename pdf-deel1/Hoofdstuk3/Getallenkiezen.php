<!DOCTYPE HTML>
<!--invoer.php-->
<html>
	<head>
		<meta charset=utf-8>
		<title>Gebruikersinvoer</title>
	</head>
	<body>
		<h1>
			<?php
                  $getal1= $_GET["getal1"];
                  $getal2 = $_GET["getal2"];
                  $operator = $_GET["bewerking"];
                  switch ($operator) {
                      case 1 :
                          $resultaat = $getal1+$getal2;
                          break;
                      case 2 : 
                          $resultaat = $getal1 - $getal2;
                          break;
                      case 3 :
                          $resultaat = $getal1 * $getal2;
                          break;
                      case 4 :
                          $resultaat = $getal1 / $getal2;
                          break;
                  }
                  
                  echo "$resultaat";
            	?>		
		</h1>
	</body>
</html>
