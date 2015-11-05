<?php

session_start();
require_once ('./spel.php');


$bord = new Bord();

if (isset($_GET["action"])) {
    if ($_GET["action"] = "rood") {
        $_SESSION["kleur"] = 1;
    } elseif ($_GET["action"] = "geel") {
        $_SESSION["kleur"] = 2;
    } elseif ($_GET["action"] = "gooi") {
        $bord->gooiMunt($_GET["kolom"], $_SESSION["kleur"]);
    } elseif ($_GET["action"] = "reset") {
        $bord->reset();
    }
}
?>

<!Doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Vier op een rij</title>
    </head>
    <body>
        <h1>Vier op een Rij</h1>
        <table>
            <?php
            for ($rij = 1; $rij < 7; $rij++) {
                ?>
                <tr>
                    <?php
                    for ($kolom = 1; $kolom < 8; $kolom++) {
                        ?>
                        <td><a href="spelen.php?action=gooi&kolom=<?php echo($kolom); ?>"><?php
                                
                                if ($bord->getStatus($rij, $kolom) == 0) {
                                    ?>
                                    <img src="../../../images/emptyslot.png">
                                <?php } elseif ($bord->getStatus($rij, $kolom) == 1) {
                                    ?>
                                    <img src="../../../images/redslot.png">
                                <?php } else {
                                    ?>
                                    <img src="../../../images/yellowslot.png">
                                <?php }
                                ?></a></td>

                    <?php } ?>
                </tr>
            <?php }
            ?>
        </table>
        <p><a href="spelen.php">Vernieuw bord</a></p>
        <a href="spelen.php?action=reset">Spel herstarten</a>
    </body>
</html>
