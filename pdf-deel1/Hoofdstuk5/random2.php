<?php

session_start();

class Random {

    public function random() {
        if (!isset($_SESSION["getal"])) {
            $getal = 0;
        } else {
            $_SESSION["getal"] ++;
        }
        if (!isset($_SESSION["randomGetal"]) || $_SESSION["getal"] == 10) {
            $_SESSION["randomGetal"] = rand(1, 100);
            $_SESSION["getal"] = 0;
        }
    }

}

?>
