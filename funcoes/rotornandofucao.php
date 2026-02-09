<?php

function soma($a)
{
    //algoritimo 30s
    return function($b) use ($a){
        return $a + $b;
    };
}
echo soma(5)(4) ."\n";
$doismais = soma(2);
echo $doismais(10) . "\n";