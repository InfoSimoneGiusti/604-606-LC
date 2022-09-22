<?php

class Persona {
    
    public $nome;
    public $cognome;
    public $eta;
    

    public function __construct($argomentoNome, $argomentoCognome, $argomentoEta = null) //questa è una funzione magica (speciale) che direttamente PHP invoca alla creazione dell'oggetto
    {
        $this->nome = $argomentoNome;
        $this->cognome = $argomentoCognome;
        $this->eta = $argomentoEta;
    }

    public function dammiNomeCompleto() {
        echo $this->nome . ' ' . $this->cognome . "<br>";
    }

}   
