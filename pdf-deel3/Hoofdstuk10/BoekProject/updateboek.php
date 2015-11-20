<?php
namespace Hoofdstuk10\BoekProject\Presentation;

use Hoofdstuk10\BoekProject\Busines\GenreService;
use Hoofdstuk10\BoekProject\Busines\BoekService;
use Hoofdstuk10\BoekProject\Exceptions\TitelBestaatException;

if (isset($_GET["action"]) && $_GET["action"] == "process") {
    try {
        $boekSvc = new BoekService();
        $boekSvc->updateBoek($_GET["id"], $_POST["txtTitel"], $_POST["selGenre"]);
        header("location: toonalleboeken.php");
        exit(0);
    } catch (TitelBestaatException $ex) {
        header("location:updateboek.php?id=" . $_GET["id"] . "&error=titelbestaat");
        exit(0);
    }
} else {
    $genreSvc = new GenreService();
    $genreLijst = $genreSvc->getGenresOverzicht();
    $boekSvc = new BoekService();
    $boek = $boekSvc->haalBoekOp($_GET["id"]);
    if (isset($_GET["error"])) {
        $error = $_GET["error"];
    }

    include("presentation/updateboekForm.php");
}