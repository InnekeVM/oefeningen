<!DOCTYPE HTML>
<!--tafels.php-->
<html>
    <head>
        <meta charset=utf-8>
        <title>Tafels 1 tot 10 </title>
    </head>
    <body>
        <table border="1">
            <tr>
                <td></td>
                <?php
                for ($i = 1; $i <= 10; $i++) {
                echo("<td>$i</td>");}
                    ?>
                </tr>

                <?php
                for ($i = 1; $i <= 10; $i++) {
                    echo ("<tr>");
                    echo("<td>$i</td>");
                    for ($j = 1; $j <= 10; $j++) {
                        $product = $i * $j;
                        echo ("<td>$product</td>");
                    }
                    echo ("</tr>");
                }
                ?>
        </table>
    </body>
</html>