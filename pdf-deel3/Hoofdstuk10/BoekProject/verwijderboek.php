<?php

use VDAB\BoekProject\Business\BoekService;

require_once 'Doctrine/Common/ClassLoader.php';
use Doctrine\Common\ClassLoader;

$classLoader = new ClassLoader("VDAB", "src");
$classLoader->register();

$boekSvc = new BoekService();
$boekSvc->verwijderBoek($_GET["id"]);
header("location: toonalleboeken.php");
exit(0);
