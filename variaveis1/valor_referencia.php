<?php

//atribuição valor
$a = 3;
$b = $a;
$a++;

echo "{$a} {$b} \n";

// atribuição referência
$x = 8;
$r = &$x; //verifique o &

$r = "test";

echo "{$x} {$r}";