<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>MVC</title>
    </head>
    <body>
        <h1>Personenlijst</h1>
        <ul>
            <?php
            foreach ($personen as $persoon) {
                ?>
                <li>
                    <?php echo ($persoon->getFamilienaam() . "," . $persoon->getVoornaam()); ?>
                </li>
                <?php
            }
            ?>
        </ul>

    </body>

</html>
