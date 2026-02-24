<?php

$valorRetorno = require('return_usado.php');
echo "$valorRetorno \n";
echo "$variavel_retornada \n";
echo __DIR__ . "\n";

//carregar o arquivo de forma absoluta

$valorretornado2 = require(__DIR__ . "/return_nao_usado.php");
echo "$valorretornado2 \n";
echo "$variavalDeclarada \n";