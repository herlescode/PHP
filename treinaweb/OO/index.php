<?php

require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../../vendor/autoload.php'; // Carrega a pasta vendor que você criou

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

require_once ('src/diarista.php');
require_once('diarista.php');//erro mas procegue com os seguintes passos
//include_once('diarista1.php');//erro fatal e para

use Raiz\Diarista;
use Src\Diarista as DiaristaSrc;


// echo ("$saudacao");
// $maria = new \Src\Diarista;
// $joao = new \Raiz\Diarista;
$joao = new Diarista;
$maria = new DiaristaSrc;
$joao->nome = "Juca Xaves";
$maria->telefone = "(61)9 8585-2021";
dump($maria, $joao);