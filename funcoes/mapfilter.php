<?php

$notas = [4.6, 5.9, 7.2, 9.4];
$notasfinais = [];

foreach($notas as $nota) {
    $notasfinais[] = round($nota);
}

//mesma maneira do foreach
$notasfinais1 = array_map('round', $notas);
print_r($notasfinais1);

function aprovados($nota)
{
    return $nota >= 7;
}
$aprovacaoaluno = array_filter($notas, 'aprovados'); 
print_r ($aprovacaoaluno);

//echo "///////// ------- \\\\\\\\\\ \n";

//soma todos os resultados do array
$soma = array_sum($notasfinais);

$media = $soma / 4;

if($media >= 6 ){
    echo $media . " aprovado \n";
} else {
    echo $media ." Reprovado \n";
}
echo "soma total " . $soma . "\n" ;

print_r($notasfinais);