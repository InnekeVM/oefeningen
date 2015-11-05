<!DOCTYPE HTML>
<html>
    <head>
        <meta charset=utf-8>
        <title>switch</title>
    </head>
    <body>
        <?php
        $getal = 50;
        switch ($getal) {
            case 1 :
                print("Eén");
                break;

            case 2 :
                print ("Twee");
                break;
            case 3 :
                print ("Drie");
                break;
            case 4 :
                print ("Vier");
                break;
            case 4 :
                print ("Vijf");
                break;
            default :
                print ("$getal");
        }
        ?>
    </body>
</html>
