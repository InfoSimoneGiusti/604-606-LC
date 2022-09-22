<?php

require_once __DIR__ . '/car.php';

$pandaCovid = new Car("Fiat", "Panda", "Arancione", 2020);
$maggiolino = new Car("VW", "Maggiolino", "Blu", 1968);

$pandaCovid->accelerate();
$pandaCovid->accelerate();

$maggiolino->accelerate();
$maggiolino->accelerate();
$maggiolino->brake();

//echo $pandaCovid->model . ' viaggia a ' . $pandaCovid->getSpeed() . '<br>';
//echo $maggiolino->model . ' viaggia a ' . $maggiolino->getSpeed() . '<br>';
