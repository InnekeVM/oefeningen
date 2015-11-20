<?php
namespace VDAB\BoekProject\Presentation;

use VDAB\BoekProject\Business\GenreService;
use VDAB\BoekProject\Business\BoekService;
use VDAB\BoekProject\Exceptions\TitelBestaatException;
use Doctrine\Common\ClassLoader;

require_once 'Doctrine/Common/ClassLoader.php';

$classLoader = new ClassLoader("VDAB", "src");
$classLoader->register();

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

    include("src/VDAB/BoekProject/Presentation/updateboekForm.php");
}