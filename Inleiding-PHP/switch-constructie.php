<HTML>
    <head><TITLE>switch-constructie</TITLE>
    </head>
    <BODY>

        <?php
        $kleur = "blauw";
        switch ($kleur) {
            case "blauw" : {
                    print ("Blauw is een mooie kleur");
                }
                break;
            case "groen" : {
                    print ("Groen is niet mijn fovoriete kleur");
                }
                break;
            case"rood": {
                    print ("Rood is de kleur van de liefde");
                }
                break;
            default : {
                    print ("Deze kleur heeft ook zijn charme");
                }
        }
        ?>    

    </BODY>


</HTML>