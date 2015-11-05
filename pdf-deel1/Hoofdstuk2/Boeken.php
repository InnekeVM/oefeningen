<?php

class Book {

    public function getTitle() {
        $title = "Handleiding HTML";
        return $title;
    }

}
?>
<!DOCTYPE HTML>
<HTML>
    <head>
        <meta charset="utf-8">
        <TITLE>Boeken</TITLE>
    </head>
    <BODY>
        <H1>
            <?php
            $boek = new Book();
            print($boek->getTitle());
            ?>
        </H1>
    </BODY>
</HTML>
