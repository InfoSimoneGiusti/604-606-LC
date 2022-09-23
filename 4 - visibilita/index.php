<?php

class Padre {
    public $attributoPubblico;
    protected $attributoProtetto; //protetto o privato, sono accessibili solo dentro la classe, non nell'oggetto
    private $attributoPrivato = 'Ciao Classe 69';
}

class Figlio extends Padre {

    //se io qua accedo in lettura o in scrittuta di un attributo ereditato PUBLIC, ci riesco!
    //se io qua accedo in lettura o in scrittuta di un attributo ereditato PROTECTED, ci riesco!

    //se io qua accedo in lettura o in scrittuta di un attributo ereditato PRIVATE, non ci riesco!
    //non ci riesco banalmente perchè non esiste, non viene passato da padre a figlio

}



/* tutti i casi relativi ad istanza di Padre e Foglio (oggetti) */
$padre = new Padre();

/* public */
$padre->attributoPubblico = 'qualcosa'; //ok, si puo fare, in quanto public
echo $padre->attributoPubblico;  //ok, si puo fare, in quanto public

/* protected */
$padre->attributoProtetto = 'qualcosa'; //NO! Non posso farlo in quanto protetto
echo $padre->attributoProtetto;  //NO! Non posso farlo in quanto protetto

/* private */
$padre->attributoPrivato = 'qualcosa'; //NO! Non posso farlo in quanto privato
echo $padre->attributoPrivato;  //NO! Non posso farlo in quanto privato



$figlio = new Figlio();

/* public */
$figlio->attributoPubblico = 'qualcosa'; //ok, si puo fare, in quanto public e quindi ereditato nel figlio
echo $figlio->attributoPubblico;  //ok, si puo fare, in quanto public e quindi ereditato nel figlio

/* protected */
$figlio->attributoProtetto = 'qualcosa'; //NO! Non posso farlo in quanto protetto
echo $figlio->attributoProtetto;  //NO! Non posso farlo in quanto protetto

/* private */
/*MASSIMA ATTENZIONE!!!! In realtà non state accedendo alla proprietà ereditata dal padre, 
ma state creando un nuovo attributo (pubblico) interno alla classe figlia. La proprietà privata del padre non è accessibile da qua!*/
$figlio->attributoPrivato = 'qualcosa'; //SI PUO FARE, ma non state assegnando il valore alla proprieta del padre!
echo $figlio->attributoPrivato; //NON SI PUO FARE IN QUANTO ATTRIBUTO PRIVATO NON VIENE EREDITATO.