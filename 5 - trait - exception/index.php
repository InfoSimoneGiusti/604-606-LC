<?php

require_once __DIR__ . '/AntifurtoAuto.php';
require_once __DIR__ . '/Smartwatch.php';

$antifurto1 = new AntifurtoAuto();
var_dump($antifurto1);


try {
    $antifurto1->setAnnoInstallazione("Ciao mondo");
} catch (Exception $e) {
    echo "ERRORE: " . $e->getMessage();
}

$smartwatch1 = new Smartwatch();
var_dump($smartwatch1);