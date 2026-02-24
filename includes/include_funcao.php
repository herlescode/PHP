<?php

echo "carregando: include_function \n";

function carregarArquivo() {
    include ('include_arquivo.php');

    echo $variavel . "\n";
    echo soma(10, 5) . "\n";
}

echo "novamente no arquivo include_function \n";
carregarArquivo();
echo soma(1, 8) . "\n";
