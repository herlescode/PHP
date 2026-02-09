<?php

function saudacao($nome = 'Senhor', $sobrenome = 'Mestre'){
    return "Bem vindo, $nome $sobrenome ! \n ";
}

echo saudacao();
echo saudacao('Herles', 'Pontual');
echo saudacao('', 'Pontual');