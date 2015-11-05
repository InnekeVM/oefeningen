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
            	print("Goeiemorgen, ");
            	print($_GET["naam"]);
            	print(".");
            	?>
            
            	<?php
            	print("Het is vandaag ");
            	print($_GET["dag"]);
            	print(" ...");
            	?>		
		</h1>
	</body>
</html>
