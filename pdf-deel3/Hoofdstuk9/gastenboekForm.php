<?php
require_once './gastenboek.php';

$gastenboek = new Gastenboek();

if (isset($_POST["action"]) && $_POST["action"] == "new") {
    $auteur = $_POST["auteur"];
    $bericht = $_POST["bericht"];

    if (!empty($auteur) && !empty($bericht)) {
        $gastenboek->voegToe($auteur, $bericht);
    }
}
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Gastenboek</title>
    </head>
    <body>
        <h1>Berichten</h1>
        <ul>
            <?php
            $tab = $gastenboek->getLijst();
            foreach ($tab as $bericht) {
                ?>

                <li>Auteur: <?php echo ($bericht->getAuteur()); ?><br>
                    <?php echo($bericht->getBericht()); ?></li>
                <?php
            }
            ?>
        </ul>
        <h1>Bericht toevoegen</h1>
        <form action="gastenboekForm.php" method="post">
            <input type="hidden" name="action" value="new">
            <p><strong> Auteur: </strong><input type="text" name="auteur"></br></p>
            <p><strong>Boodschap: </strong></p>
            <textarea name="bericht" cols="50" rows="4"></textarea></br>
            <input type="submit" value="verzenden">
        </form>
    </body>
</html>
