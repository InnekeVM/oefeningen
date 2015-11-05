<?php

//ingredienten.php

class IngredientenArrayGenerator {

    public function getIngredienten() {
        $ingredienten = array();
        array_push($ingredienten, "bloem");
        array_push($ingredienten, "zout");
        array_push($ingredienten, "suiker");
        array_push($ingredienten, "gist");
        $ingredienten[] = "water";
        return $ingredienten;
    }

}
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ingredienten</title>
    </head>
    <body>
        <pre>
            <?php
            $ingredienten = new IngredientenArrayGenerator();
            print_r($ingredienten->getIngredienten());
            ?>
        </pre>
    </body>
</html>
