<?php

ini_set('display_erros', 1);

include('include_once_arquivo.php');
// require('include_once_arquivo.php');
echo "$variavel";
$variavel = "Nova variavel  \n";
echo "$variavel";

include('include_once_arquivo.php');
echo "Variavel = {$variavel}";

include_once('include_once_arquivo.php');
echo "$variavel";

require_once('include_once_arquivo.php');
echo "$variavel";