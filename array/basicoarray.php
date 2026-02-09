<?php

// $lista  = array(1, 2, 3, 4.1, "lista");

// print_r ($lista);
// echo '<br>'. $lista[1];

// $texto = "Herles é Pontual";

// echo '<br>' . $texto[10]; //cuidado com acentos
// echo '<br>' . mb_substr($texto, 9, 4);
// $lista[0] = 124;
// echo '<br>' . $lista[0] . "<br>";
// print_r ($lista);

$dados = array (
    "idade" => 14,
    "cor" => 'Preto'
);
$dados[] = 'terça'; //adicionando sem indice
$dados['dia'] = 30; //adicionando com indice

print_r($dados);
echo '<br>'. $dados["idade"];
