<?php

require __DIR__ . '/../../../vendor/autoload.php';
require __DIR__ . '/../../../vendor/autoload.php';

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

function carregarArquivos($nomedaclasse)
{
    echo $nomedaclasse;
    require_once ($nomedaclasse . '.php');
}
spl_autoload_register('carregarArquivos');

// 2. Crie a classe direto (sem Use, sem Raiz, sem Src)
$maria = new Diarista;
//$pag = new Pagamento;

// 3. Teste
$maria->nome = "Herles Pontual";
//$pag->valor = 250;

dump($maria);