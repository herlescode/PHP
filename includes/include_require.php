<?php

echo "include de arquivo inexistente \n";
ini_set('display_errors', 1); // mostar os warning e Fatal error
// include('arquivoinexistente.php'); //gera um warning e executa o que tem para baixo

require('arquivoinexistente.php'); //erro fatal e não executa o que tem para beixo

echo 'teste'. "\n";
