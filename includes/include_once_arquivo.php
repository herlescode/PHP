<?php

echo "Carregando: include_once_arquivo \n";

$variavel = "Estou definida \n";

if(!function_exists('soma')){
    function soma($a, $b) {
    return $a + $b;
    }
}
