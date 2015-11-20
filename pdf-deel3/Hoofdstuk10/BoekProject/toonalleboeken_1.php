<?php
require_once '../BoekProject/src/VDAB/BoekProject/Business/BoekService.php';

require_once 'Libraries/Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem("Presentation");
$twig = new Twig_Environment($loader);

$boekSvc = new BoekService();
$boekenLijst = $boekSvc->getBoekenOverzicht();

$view = $twig->render("boekenlijs.twig", array("boekenLijst"=>$boekenLijst));

print($view);