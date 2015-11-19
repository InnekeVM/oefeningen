<?php
require_once 'Exceptions/TitelBestaatException.php';
require_once 'business/GenreService.php';
require_once 'business/BoekService.php';

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

