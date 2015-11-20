<?php

use VDAB\BoekProject\Business\BoekService;
use Doctrine\Common\ClassLoader;

require_once 'Doctrine/Common/ClassLoader.php';

$classLoader = new ClassLoader("VDAB", "src");
$classLoader->register();

$boekSvc = new BoekService();
$boekenlijst = $boekSvc->getBoekenOverzicht();
include("src/VDAB/BoekProject/Presentation/boekenlijst.php");
