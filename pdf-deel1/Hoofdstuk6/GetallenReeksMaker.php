<?php

//GetallenReeksMaker.php
class GetallenReeksMaker {

    public function getReeks() {
        $tab = array();
        for ($i = 0; $i <= 10; $i++) {
            $getal = rand(1, 50);
            $tab[$i] = $getal;
        }
        asort($tab);
        return $tab;
    }
}
