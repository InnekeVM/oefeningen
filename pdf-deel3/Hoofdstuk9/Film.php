<?php
require_once './FilmLijst.php';
$voegToe = new Film();
if (isset($_POST["action"]) && $_POST["action"]=="new"){ 
    $verwerkForm = $voegToe->voegToe($_POST["titel"],$_POST["duurtijd"]);
}

$delete = new Film();
if(isset ($_GET["action"])&& $_GET["action"]=="delete"){
    $deleteFilme = $delete->delete($$_GET["id"]);}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Films</title>
    </head>
    <body>
        <h1>Alle Films</h1>
        <?php
        $tb = new Filmlijst();
        $tab = $tb->getLijst();
        ?>
        <ul>
            <?php
            foreach ($tab as $film) {
                $filmNaam = $film->getTitel();
                $filmDuurtijd=$film->getDuurtijd();
                $filmId=$film->getId();
            }
            ?>
            <li> 
                <?php echo ($filmNaam . "(" . $filmDuurtijd." min)") ?> <a href="Film.php?action=verwijder&id= <?php echo ($filmId); ?>" ><img src="../../../images/delete.png"/></a>
            </li>
            
        </ul>
        <h1>Film Toevoegen</h1>
        <form action="Film.php" method="post">
            Titel: <input type="text" name="titel"/><br/>
            Duurtijd: <input type="text" name="duurtijd"/>minuten <br/>
            <input type="hidden" name="action" value="new">
            <input type="submit" value="toevoegen">            
        </form>
    </body>
</html>

