<?php

$dados = [
    "pessoa" => [
        "nome" => "Sabrina",
        "idade" => 40
    ],
    [
        "cidade" => "MG",
        "nacimento" => '09/10'
    ]
];

print_r($dados);
echo '<br>' . $dados['pessoa']['idade'];

$dados[] = [
    "nome" => "Herles",
    "idade" => 44,
    "cidade" => "Brasília"
];

print_r($dados);
echo '<br>'. $dados[1]["cidade"];

$dados[2]["vizinho"] = "Chaves";

print_r($dados);