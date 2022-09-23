<?php

require_once __DIR__ . '/trait/Position.php';

class AntifurtoAuto {

    use Position;

    public $modello;
    public $brand;
    protected $annoInstallazione;

    public function setAnnoInstallazione($year) {
        if (is_int($year) && $year >= 1970 && $year < 2050) {
            $this->year = $year;
        } else {            
            throw new Exception('Anno in un formato errato! Anno deve essere un intero compreso tra 1970 e 2050');
        }
    }

    public function getAnnoInstallazione() {
        return $this->year;
    }
}