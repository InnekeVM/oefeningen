<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP is Fantastisch</title>
        <style>body { text-align: center;}</style> 
    </head>
    <body>
        <?php
        for ($i = 1; $i < 7; $i++) {
            ?>
            <p style="font-size: <?php print($i * 10); ?>px"> PHP is fantastisch</P>
            <?php
        }
        for ($i = 6; $i > 0; $i--) {
            ?>
            <p style="font-size: <?php print($i * 10); ?>px"> PHP is fantastisch</P>
                <?php
            }
            ?>
    </body>
</html>
