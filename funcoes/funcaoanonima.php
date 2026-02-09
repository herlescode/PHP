<?php

$soma = function ($a, $b)
{
    return $a - $b;
};

echo $soma(5, 4) . "\n";

function executar($a, $b, $op, $funcao)
{
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado \n ";
}

executar(2, 3, '-' , $soma);

$nums = [1, 2, 3, 4];

$mult = array_map(function($x){
    return $x * 2;
}, $nums);
print_r($mult);