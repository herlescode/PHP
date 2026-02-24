<?php

//session_id('7e6f632ad7b2bd97c8e49a127f941b00');

session_start();
//echo session_id();

$contador = &$_SESSION['contador']; //& acessar uma referencia de memoria
$contador =  $contador ? $contador + 1 : 1; //inicializa o contador com inteiro :1 a partir dai ele soma +1


if($_SESSION['contador'] % 5 === 0) { //a cada 5 refresh na pagina ele muda de id
    session_regenerate_id();
}

if($_SESSION['contador'] >= 15){ //a cada 15 refresh eu zero tudo
    session_destroy();
}

echo "Id da sessão: " . session_id() . "<br>";
echo "contador: " . $_SESSION['contador'];