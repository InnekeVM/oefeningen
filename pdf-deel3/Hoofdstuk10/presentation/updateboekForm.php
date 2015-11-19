<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Boeken</title>
    </head>
    <body>
        <h1>Boek bijwerken</h1>

        <?php
        if (isset($error) && $error == "titelbestaat") {
            ?>
            <p style="color: red">Titel bestaat al!</p>
            <?php
        }
        ?>

        <form method="post" action="updateboek.php?action=process&id=<?php echo($boek->getId()); ?>">
            <table>
                <tr>
                    <td>Titel:</td>
                    <td>
                        <input type="text" name="txtTitel" value="<?php echo($boek->getTitel()); ?>">
                    </td>
                </tr>
                <tr>
                    <td>Genre:</td>
                    <td><select name="selGenre">
                            <?php
                            foreach ($genreLijst as $genre) {
                                if ($genre->getId() == $boek->getGenre()->getId()) {
                                    $selWaarde = "selected";
                                } else {
                                    $selWaarde = "";
                                }
                                ?>
                                <option value="<?php echo ($genre->getId()); ?>"<?php echo($selWaarde); ?>><?php echo($genre->getGenreNaam()); ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="bijwerken"/>
                    </td>
                </tr>
            </table></form>
    </body>
</html>
