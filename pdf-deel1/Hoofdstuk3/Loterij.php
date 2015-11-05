<!DOCTYPE HTML>
<!--invoer.php-->
<html>
	<head>
		<meta charset=utf-8>
		<title>Gebruikersinvoer</title>
	</head>
	<body>
            <?php
		$gok = $_GET["gok"];
                $rand = rand(1, 10);
                
                echo ("jouw gok was $gok, de computer koos $rand");
                    ?>
	</body>
</html>
