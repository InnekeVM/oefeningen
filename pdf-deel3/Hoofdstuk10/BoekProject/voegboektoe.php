<?php
namespace Hoofdstuk10\BoekProject\Presentation;

use Hoofdstuk10\BoekProject\Exceptions\TitelBestaatException;
use Hoofdstuk10\BoekProject\Busines\GenreService;
use Hoofdstuk10\BoekProject\Busines\BoekService;
use Doctrine\Common\ClassLoader;

require_once 'Doctrine/Common/ClassLoader.php';

$classLoader = new ClassLoader("Hoofdstuk10", "pdf-deel3");
$classLoader->register();

if(isset($_GET["action"]) && $_GET["action"] == "process"){
    try {
    $boekSvc = new BoekService();
    $boekSvc->voegNieuwBoekToe($_POST["txtTitel"], $_POST["selGenre"]);
    header("location: toonalleboeken.php");
    exit(0);
    } catch (TitelBestaatException $ex) {
        header("location: voegboektoe.php?error=titelbestaat");
        exit(0);
    }
} else {
    $genreSvc = new GenreService();
    $genreLijst = $genreSvc->getGenresOverzicht();
	if (isset($_GET["error"])){
		$error = $_GET["error"];
	}

    include 'presentation/nieuwboekForm.php';
}

