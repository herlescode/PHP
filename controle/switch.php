<?php   

$categoria = 'LuXo';

if($categoria == 'Luxo'){
    $carro = 'BMW';
    $preco = 500000;
}else if($categoria == 'suv') {
    $carro = 'Renegate';
    $preco = 92000;
}else if($categoria == 'Sedan') {
    $carro = 'Cronus';
    $preco = 57000;
}else {
    $carro = 'Mobi';
    $preco = 33000;
}

$valorformatado = number_format($preco, 2, ',', '.');
echo "$carro, $valorformatado <br>";

switch (strtolower($categoria)) {
    case 'luxo': 
        $carro = 'BMW';
        $preco = 540000;
        break;

    case 'suv': 
        $carro = 'Renagate';
        $preco = '84000';
        break;
    
    case 'seda': 
        $carro = 'corola';
        $preco = 75000;
        break;

    default:
        $carro = 'mobilete';
        $preco = 35000;
        break;
}

$valorformatado1 =number_format($preco, 2, ',', '.');
echo "meu carro é: $carro e o valor esté $preco";