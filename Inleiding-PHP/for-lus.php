<HTML>
    <head><TITLE>for-lus</TITLE>
    </head>
    <BODY>

        <h2><?php
        $grondgetal=7;
        print ("Het grondgetal is $grondgetal.");
        ?>
        </h2>
        <TABLE width ="30%" border ="1">
        <?php
        $macht = 1;
       for ($teller = 0; $teller<=10; $teller++){
       ?>
            <tr>
                <td width ="50%"><?php print ($teller);?></td>
                <td width ="50%"><?php print ($macht);?></td>
            </tr>
            <?php
            $macht = $macht*$grondgetal;           
       }
       ?>
            </TABLE>
    </BODY>


</HTML>
