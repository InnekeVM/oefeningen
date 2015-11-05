<!DOCTYPE HTML>
<!--tafels.php-->
<html>
    <head>
        <meta charset=utf-8>
        <title>Tafels</title>
    </head>
    <body>
        <?php
        $grondgetal = $_POST["getal"];
        ?>
        <table border="1">
            <th colspan="2" style="font-weight: bold">De tafel van <?php echo("$grondgetal")?></th>
            <?php
            for ($i=1; $i<=10; $i++){
                echo ("<tr>");
                echo ("<td> $i maal $grondgetal </td>");
                $product=$i*$grondgetal;
                echo ("<td>$product</td>");
                echo ("</tr>");
            }?>
        </table>


    </body>
</html>