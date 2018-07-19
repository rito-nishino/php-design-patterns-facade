<?php
require_once 'autoload.php';

use App\Facade\BtoFacade;

$bto = new BtoFacade();
$bto->chooseModel(rand(1, 3));
$bto->chooseCpu(rand(1, 3));
$bto->chooseMemory(rand(1, 3));
$bto->chooseHdd(rand(1, 3));

echo $bto->Total();