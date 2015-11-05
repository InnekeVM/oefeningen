<?php
session_start();
if (isset($_GET["reset"]) && $_GET["reset"] == 1) {
    unset($_SESSION["deurenreeks"]);
    unset($_SESSION["schat"]);
}

if (!isset($_SESSION["deurenreeks"])) {
    $_SESSION["deurenreeks"] = array();
    for ($i = 1; $i < 7; $i++) {
        $_SESSION["deurenreeks"][$i] = 0;
    }
    $_SESSION["schat"] = rand(1, 7);
}

if (isset($_GET["KiesDeur"])) {
    $gekozendeur = $_GET["KiesDeur"];

    if ($gekozendeur == $_SESSION["schat"]) {
        $_SESSION["deurenreeks"][$gekozendeur] = 2;
    } else {
        $_SESSION["deurenreeks"][$gekozendeur] = 1;
    }
}
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Schattenjact</title>
    </head>
    <body>
        <h1>Kies een deur</h1>
        <?php
        for ($i = 1; $i < 7; $i++) {
            ?>
            <a href="schat.php?KiesDeur=<?php print ("$i"); ?>">
            <?php if ($_SESSION["deurenreeks"][$i] == 0) { ?>
                   <img src="doorclosed.png"/>
                   <?php } elseif ($_SESSION["deurenreeks"][$i] == 1) {
                       ?>
                    <img src="dooropen.png"/>
                <?php } elseif ($_SESSION["deurenreeks"][$i] == 2) {
                    ?>
                    <img src="doortreasure.png"/>
                <?php
                }
            }
            ?></a>

        <p>Klik <a href="schat.php?reset=1">hier</a> om een nieuw spel te beginnen.</p>
    </body>
</html>

