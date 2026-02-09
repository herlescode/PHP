<?php

$variavel = 1;

function valorReal()
{
    global $variavel; 
    //$variavel = 3;
    echo"o valor da minha variavel {$variavel} \n";  
}

function obterRetorno()
{
    return 'meu nome';
}

var_dump (obterRetorno());
$varTeste = obterRetorno();
echo $varTeste;
echo " {$variavel} \n";
valorReal();

