<?php

//echo pi();
$pi = 3.14;

if(round(pi(),2) == $pi){
    echo "deu certo";
} else {
    echo "deu errado";
}
echo "<br>";
if ($pi - pi() < 0.01){
    echo "estou no caminho certo";
} else {
    echo "estou no caminho errado";
}

