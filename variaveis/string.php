<?php

echo "eu sou uma boa pessoa \n";
var_dump('como vai');

//concatenação

echo 12 .' equivale a ' . 4 * 3 . "\n";
echo "tudo bem ", "como vai ";

echo strtoupper("\n maximizar \n" );
echo strtolower("minusculo \n");
echo ucfirst("somente a primeira letra \n");
echo ucwords("todas as primeiras letras \n");
echo strlen("quantas letras?". "\n");
//echo mb_strlen("eu também");
echo substr("so uma parte mesmo da string \n" , 7, 6);

$acha = "!abcaBcabc";
$letras = "abc";
echo strpos($acha, $letras);