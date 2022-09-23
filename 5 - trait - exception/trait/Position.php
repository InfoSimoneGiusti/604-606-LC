<?php

trait Position {

    public $latitudine;
    public $longitudine;

    public function getPosizione() {
        return "Latitudine: " . $this->latitudine . ' - Longitudine: ' . $this->longitudine;
    }
    
}