<?php

$dados = [
    "nome" => "Herles Pontual",
    "idade" => 44
];
$dadoscomplementar = [
    "cor" => "Parda",
    "idade" => 55
];

$dadoscompletos = $dados + $dadoscomplementar;
print_r($dadoscompletos);

echo '<br>'. is_array($dadoscompletos); //se é realmente o array
echo '<br>'. count($dadoscompletos);

echo '<br>';
$indice = array_rand($dadoscompletos);
echo "$indice = $dadoscompletos[$indice]";
echo '<br>';

echo "{$dadoscompletos['idade']}";

unset($dadoscompletos["nome"]);
echo "<br>";
print_r($dadoscompletos);

$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];

$decimais = $impares + $pares; //só vai imprimir os impares
echo '<br>';
//print_r($decimais);

$decimais = array_merge($pares, $impares);
echo '<br>';
print_r($decimais);//aleatorio

sort($decimais); //ordenado
echo '<br>';
print_r($decimais);




