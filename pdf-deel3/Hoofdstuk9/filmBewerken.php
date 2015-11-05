<?php
require_once './filmlijst1.php';

$update = false;
if (isset($_GET["action"]) && $_GET["action"] == "bewerk") {
    $film = new Film($_GET["id"], $_POST["titel"], $_POST["duurtijd"]);
    $filmlijst = new Filmlijst;
    $filmlijst->update($film);
    $update = true;
}
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Film Bewerken</title>
    </head>
    <body>
        <h1>Film bewerken</h1>

        <?php
        if ($update) {
            echo ("record werd bijgewerkt");
        }
        $filmlijst = new filmlijst();
        $film = $filmlijst->getFilmById($_GET["id"]);
    
        ?>
        <form action="filmBewerken.php?action=bewerk&id=<?php echo($_GET["id"]); ?> " method="post">
            Titel: 
            <input type="text" name= "titel" value="<?php echo ($film->getTitel()); ?>"/><br/><br/>
            Duurtijd:
            <input type="text" name="duurtijd" value="<?php echo($film->getDuurtijd()); ?>"/><br/><br/>
            <input type="submit" value="wijzigen">
        </form>
        <a href="gegevensFilm.php">Terug naar overzicht</a>
    </body>

</html>
