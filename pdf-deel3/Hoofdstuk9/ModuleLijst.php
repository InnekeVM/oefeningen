<?php
require_once './modulesOpzoeken.php';
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Zoekresultaat</title>
    </head>
    <body>
        <h1>Zoekresultaat</h1>

        <?php
        $pl = new modulesOpzoeken();
        $tab = $pl->getLijst();
        ?>
        <ul>
            <?php
            foreach ($tab as $module) {
                echo ("<li>" . $module . "</li>");
            }
            ?>
        </ul>
    </body>
</html>
