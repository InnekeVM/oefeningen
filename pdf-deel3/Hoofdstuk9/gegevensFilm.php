<?php
require_once './filmlijst1.php';

$filmlijst = new filmlijst();

if (isset($_POST["action"]) && $_POST["action"] == "new") {

    $filmlijst->voegToe($_POST["titel"], $_POST["duurtijd"]);
}

if (isset($_GET["action"]) && $_GET["action"] == "delete") {

    $filmlijst->verwijder($_GET["id"]);
}
?>


<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Films</title>
    </head>
    <body>
        <h1>Alle Films</h1>
        <ul>
            <?php
            $tab = $filmlijst->getLijst();

            foreach ($tab as $film) {
                ?>
                <li>
                    <a href="filmBewerken.php?id= <?php echo ($film->getId()); ?>">
                        <?php echo($film->getTitel()); ?>
                    </a>
                    (<?php echo ($film->getDuurtijd()); ?>)

                    <a href="gegevensFilm.php?action=delete&id= <?php echo ($film->getId()); ?>"><img src="../../../images/delete.png"></a>
                </li>

                <?php
            }
            ?>
        </ul>
        <h1>Film Toevoegen</h1>
        <form action="gegevensFilm.php" method="post">
            Titel: <input type="text" name="titel"/><br/>
            Duurtijd: <input type="text" name="duurtijd"/>minuten <br/>
            <input type="hidden" name="action" value="new">
            <input type="submit" value="toevoegen">            
        </form>
    </body>
</html>