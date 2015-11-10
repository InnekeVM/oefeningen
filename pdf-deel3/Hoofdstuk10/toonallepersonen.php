<?php

require_once ('business/PersoonService.php');

$pService =  new PersoonService();
$personen = $pService->getPersonenOverzicht();

include ('./presentation/Personenlijst.php');

