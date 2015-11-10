<!doctype HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Boeken</title>
    </head>
    <body>
        <h1>Boekenlijst</h1>
        <table>
            <tr>
                <th>Titel</th>
                <th>Genre</th>
            </tr>
            <?php 
            foreach ($boekenlijst as $boek) {
                ?>
            <tr>
                <td>
                    <?php print ($boek->getTitel());?>
                </td>
                <td>
                    <?php print ($boek->getGenre()->getGenreNaam());?>
                </td>
            </tr>
            <?php
            }?>
        </table>
    </body>
</html>
