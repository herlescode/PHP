<?php

namespace Outro\Nome;

echo __NAMESPACE__ ."\n";

include('use_as_arquivo.php');

function soma($a, $b){
    return $a . $b;
}

class Classe {
    public $var;

    function func() {
        echo __NAMESPACE__ . '->' . __CLASS__ . '->' . __METHOD__ . "\n";
    }
}

echo \Nome\Bem\Grande\constante . "\n";

use const Nome\Bem\Grande\constante;
echo constante . "\n";

use Nome\Bem\Grande as nbg;
echo soma(1,2) . "\n";
echo nbg\soma(1, 2) . "\n";

use function Nome\Bem\Grande\soma as somaReal;
echo somaReal(100, 200) . "\n";

$b = new \Nome\Bem\Grande\Classe();
$b->func();

$c = new nbg\Classe();
$c->func();

use \Nome\Bem\Grande\Classe as D;
$d = new D();
$d->func();