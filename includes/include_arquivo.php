<?php

echo "carregando: include_arquivo... \n";

$variavel = 'estou definida' ;

if(!function_exists('soma')) {
    function soma($a, $b) {
    return $a + $b;
    }
}


