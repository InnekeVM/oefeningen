<?php

session_start();

class Random {

    public function random() {
        if(!isset($_SESSION["randomGetal"])) {
            $_SESSION["randomGetal"]= rand(1, 100);
        }
    }

}

?>
