<?php

require_once __DIR__ . '/persona.php';
require_once __DIR__ . '/cliente.php';

$cristina = new Persona("Cristina", "Bianchi");
//$cristina->dammiNomeCompleto();


$cliente1 = new Cliente("Mario", "Rossi");
$cliente1->getFullName();

$cliente1->setDiscountByAge(72);
echo $cliente1->getDiscount();

//var_dump($cliente1);