<?php

$soma = function($a, $b) {
    return $a + $b;
};

function soma1($nome)
{
    return 'Herles';
}
$funcaosoma1 = 'soma1' ;
echo soma1('Herles');
// echo (is_callable('soma1') ? "sim \n" : "não \n");

// echo $soma(5, 3);
// echo is_callable($soma) ? " sim \n" : "\n nao" . "\n";

if($funcaosoma1 instanceof Closure) {
    echo "sim eu sou \n"; 
}else {
    echo "não sou kkkk";
}

