<?php
require_once './Spel.php';

$rij = 4;
$kolom = 4;

session_start();
if (!isset($_SESSION["spel"])) {
    $spel = new Spel($kolom, $rij);
    $_SESSION["spel"] = serialize($spel);
} else {
    $spel = unserialize($_SESSION["spel"]);
}

$allesUit = FALSE;
if (isset($_GET["action"])) {
    if ($_GET["action"] == "schakelen") {
       $allesUit =  $spel->schakelen($_GET["kolom"], $_GET["rij"]);
        $_SESSION["spel"] = serialize($spel);
        }
    if (isset($_GET["reset"])) {
        unset($_SESSION["spel"]);
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lights out!</title>
    </head>
    <body>
        <h1>Lights out!</h1>
        <?php if ($allesUit == TRUE){?>
        <h2>Gewonnen!</h2>
            <?php
            }else { ?>
        <table>
            <?php for ($r = 0; $r < $spel->getAantalRij(); $r ++) { ?>
                <tr>
                    <?php for ($k = 0; $k < $spel->getAantalKolom(); $k++) { ?>
                        <td><a href="Spelen.php?action=schakelen&kolom=<?php echo($k); ?>&rij=<?php echo($r); ?>">
                                <?php if ($spel->getStatus($k, $r) == 0) { ?>
                                <img src="../../../images/lightsout-uit.png">
                                <?php } else {
                                    ?>
                                    <img src="../../../images/lightsout-aan.png"><?php } ?>
                            </a></td>
                    <?php }
                    ?>
                </tr>

            <?php } ?>
        </table>
        <?php }?>
        <p><a href="Spelen.php?action=reset">Nieuw spel starten</a></p>
    </body>
</html>