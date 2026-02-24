<?php namespace contexto; ?>

<?php

echo __NAMESPACE__ ."\n";
const constante1 = 123;
//  
define('contexto\constante2',  345);
define(__NAMESPACE__ . '\constante3' , 3455);
define('outro_contexto\constante4', 456);

echo constante1 . "\n";
// echo \constante2 . "\n";
echo constante2 . "\n";
echo \contexto\constante3 . "\n";
echo constant(__NAMESPACE__ . '\constante3') . "\n";
echo \outro_contexto\constante4 . "\n";

function soma($a, $b){
    return $a + $b;
}

echo \contexto\soma(1, 4) . "\n";
echo soma(2, 4) . "\n";

function strpos($str, $text){
    echo "procurar por '{$text}' no '{$str}' \n";
    return 1;
}
echo strpos("O texto buscar",  "buscar") . "\n";
echo \strpos("O texto buscar",  "buscar") . "\n";
