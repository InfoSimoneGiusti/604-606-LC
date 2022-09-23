<?php


class Padre {

    private $attributoPrivato = 'Ciao Classe 69!';

    public function setValoreAttributoPrivato($valore) {
        $this->attributoPrivato = $valore;
    }

    public function getValoreAttributoPrivato() {
        return $this->attributoPrivato;
    }

    public function salutaPubblico() {
        echo "CIAO PUBBLICO <BR>";
    }

    protected function salutaProtetto() {
        echo "CIAO PROTETTO <BR>";
    }

    private function salutaPrivato() {
        echo "CIAO PRIVATO <BR>";
    }

    private function calcoloComplicatissimo($a,$b) {
        return $a+$b;
    }

    public function faiSommaTraNumeri($a, $b) {
        return $this->calcoloComplicatissimo($a, $b);
    }   


}

class Figlio extends Padre {
    //salutaPrivato qua non c'è, il figlio non la eredita dal padre
}


$istanzaPadre = new Padre();
$istanzaPadre->setValoreAttributoPrivato('Ciao MONDO!');
echo $istanzaPadre->getValoreAttributoPrivato();
$istanzaPadre->salutaPubblico();


//$istanzaFiglio = new Figlio();
//$istanzaFiglio->setValoreAttributoPrivato('***CIAO MONDO!***');
//echo $istanzaFiglio->getValoreAttributoPrivato();
