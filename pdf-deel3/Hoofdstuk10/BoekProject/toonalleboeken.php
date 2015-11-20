<?php
use Hoofdstuk10\BoekProject\Business\BoekService;
use Doctrine\Common\ClassLoader;

require_once 'Doctrine/Common/ClassLoader.php';

$classLoader = new ClassLoader("Hoofdstuk10", "pdf-deel3");
$classLoader->register();

$boekSvc = new BoekService();
$boekenlijst = $boekSvc->getBoekenOverzicht();

include ("PDF-deel3/Hoofdstuk10/BoekProject/Presentation/Boekenlijst.php");
