<?php

require_once('../../../vendor/autoload.php');

//use Root\Html\Controlador\Diarista;
//use Root\Html\Modelo\Diarista as DiaristaModelo;
use Root\Html\Modelo\Diarista;
use Root\Html\Modelo\Cliente;
use Root\Html\Modelo\Diaria;

$nomed = new Diarista;
$nomeCompl = new Cliente;
//$d1 = new DiaristaModelo;


$nomed->nome = "João Mesquita <br>";
$nomeCompl->nomeCompl = "Herika Bezerra <br>";

$diar = new Diaria('02/02/2026', 9, $nomed, $nomeCompl);


dump($diar);
//echo "<br>";
//var_dump($d1);