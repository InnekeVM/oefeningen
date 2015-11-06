<?php

class Spel {

    private $bord;

    function __construct($kolom, $rij) {
        for ($k = 0; $k < $kolom; $k++) {
            $this->bord[$k] = array();
            for ($r = 0; $r < $rij; $r++) {
                $this->bord[$k] [$r] = 0;
            }
        }
        $this->startSpel();
    }

    public function getAantalRij() {
        $aantal = count($this->bord[0]);
        return $aantal;
    }

    public function getAantalKolom() {
        $aantal = count($this->bord);
        return $aantal;
    }

    private function startSpel() {
        for ($k = 0; $k < $this->getAantalKolom(); $k++) {
            $min = rand(0, $this->getAantalRij()) - 1;
            $max = rand(0, $this->getAantalRij()) - 1;
            while ($min > $max) {
                $tijd = $min;
                $min = $max;
                $max = $tijd;
            }
            for ($r = $min; $r <= $max; $r++) {
                $this->bord[$k] [$r] = 1;
            }
        }
    }

    public function getStatus($kolom, $rij) {
        return $this->bord[$kolom] [$rij];
    }

    public function schakel($kolom, $rij) {
        if ($this->bord[$kolom] [$rij] == 0) {
            $this->bord[$kolom][$rij] = 1;
        } else {
            $this->bord[$kolom][$rij] = 0;
        }
    }

    public function schakelen($kolom, $rij) {
        $this->schakel($kolom, $rij);
        if ($kolom < $this->getAantalKolom() - 1) {
            $this->schakel($kolom + 1, $rij);
        }
        if ($kolom > 0) {
            $this->schakel($kolom - 1, $rij);
        }
        if ($rij < $this->getAantalRij() - 1) {
            $this->schakel($kolom, $rij + 1);
        }
        if ($rij > 0) {
            $this->schakel($kolom, $rij - 1);
        }
        return $this->allesUit();
    }

    public function allesUit() {
        $lichtGevonden = FALSE;
        $kolom = 0;
        while ($lichtGevonden == FALSE && $kolom < $this->getAantalKolom()) {
            $rij = 0;
            while ($lichtGevonden == FALSE && $rij < $this->getAantalRij()) {
                if ($this->getStatus($kolom, $rij) == 1) {
                    $lichtGevonden = TRUE;
                }
                $rij ++;
            }
            $kolom ++;
        }
        return !$lichtGevonden;
    }

}
