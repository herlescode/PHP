<?php

var_dump(true);
echo "<br>";
var_dump(!!true);
echo "<br>";
var_dump(true && false);
echo "<br>";
var_dump(true and true);
echo "<br>";
var_dump(false || false);
echo "<br>";
echo "-------------";
echo "<br>";
var_dump (true xor true);
echo "<br>";
var_dump (true xor false);
echo "<br>";
var_dump (false xor false);
echo "<br>";
var_dump (false xor true);

echo "<br> <br>";

//$idade = 60;
$idade = 65;
$sexo = 'M';

$pagouprevidencia = true;
$criterioh = ($idade >= 65 && $sexo = 'H');
$criteriom = ($idade >= 60 && $sexo = 'M');
$atingiucrit = $criteriom || $criterioh;
$podeaposentar = $pagouprevidencia && $atingiucrit;
echo "pode se aposentar -> $podeaposentar. <br>";

echo "<br> <br>";

if($idade >= 60 && $sexo === 'H') {
    echo "pode se aposentar $sexo";
} elseif ($idade >= 65 && $sexo === 'M') {
    echo "pode se aposentar  $sexo ";
} else {
    echo "vai trabalhar mais um pouco";
}