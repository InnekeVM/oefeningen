<?php
require_once './Omschrijving.php';
abstract class Rekening implements Omschrijving{

    private $rekeningnummer;
    private $saldo;

    public function __construct($rekeningnummer) {
        $this->rekeningnummer = $rekeningnummer;
        $this->saldo = 0;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function stort($bedrag) {
        $this->saldo+= $bedrag;
    }

    public abstract function voerIntrestDoor();
    public abstract function getOmschrijving();        
    

}
