<?php

namespace Nome\Bem\Grande;

echo __NAMESPACE__ . "\n";

const constante = 123;
function soma($a, $b) {
    return $a + $b;
}

class Classe  {
    public $var;

    function func() {
        echo __NAMESPACE__ . '->' . __CLASS__ . '->' . __METHOD__ . "\n";
    }
}