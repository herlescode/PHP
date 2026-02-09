<?php

var_dump(1 == 1);
var_dump(1 > 1);
var_dump(1 != 1);
var_dump(1 < 1);
var_dump(1 <> 1);
var_dump(1 >= 1);
var_dump(1 === '1');
var_dump(1 !== '1'); //estritamente diferentes

echo "<br>";
$idade = 32;

if ($idade >= 40 && $idade < 60){
    echo "já sou coroa {$idade}";
} else if ($idade < 40 ){
    echo "eu ainda sou adulto";
} else {
    echo "estou ficando veio";
}


