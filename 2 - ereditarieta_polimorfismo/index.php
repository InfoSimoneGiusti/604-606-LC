<?php

require_once __DIR__ . '/User.php';
require_once __DIR__ . '/Customer.php';

$cristina = new User("Cristina", "Bianchi");
var_dump($cristina);

$mario = new Customer("Mario", "Rossi", 1234);
//echo $mario->getFullName();

var_dump($mario);