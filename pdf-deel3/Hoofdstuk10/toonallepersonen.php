<?php

require_once ('./business/PersoonService.php');

$pService =  new PersoonService();
$personen = new $pService->getPersonenOverzicht();

include ('./presentation/Personenlijst.php');

