<?php

// function somar(...$num)
// {
//     $soma = 0;
//     foreach($num as $numero)
//         {
//             $soma += $numero;
//         }
//     //print_r($num);
//     return $soma;
// }
// echo (somar(1, 2, 3, 5, 5, 10) . "\n"  );

function membros($titular, ...$dependentes)
{
    echo ("Titular: $titular \n");
    if($dependentes){
        foreach($dependentes as $dep){
            echo "dependentes: $dep \n";
        }
    }

}

echo "\n";
membros("Tainá","Felipe", "Camila", "Debora", "Pedro");