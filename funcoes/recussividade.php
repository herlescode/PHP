<?php

function recussividade($num)
{
    if($num <= 1){
        return 1;
}

    return $num * recussividade($num - 1);    
}

function recussividade1($num1)
{
    $soma = 0;
    for($i = 0; $i <= $num1; $i++){
        $soma += $i;
    }
    return $soma;
}

echo recussividade1(10) . "\n";


echo recussividade(5) . "\n";