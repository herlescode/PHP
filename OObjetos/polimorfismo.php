<?php

class Comida {
    public $peso;
   
}

class Arroz extends Comida {

}

class ArrozAgrega extends Arroz {

}

class Feijao extends Comida {
    
}

class Pessoa {
    public $peso;

    function __construct($peso) {
        $this->peso = $peso;
    }

    public function comer(Comida $comida) {
        $this->peso += $comida->peso;
    }
}

$c = new Arroz();
$c->peso = 0.55;
$c1 = new ArrozAgrega();
$c1->peso = 0.6;
$c2 = new Feijao();
$c2->peso = 0.3;

$p = new Pessoa(83.45);
//$p->comer($c);
$p->comer($c1);
$p->comer($c2);

echo $p->peso . "\n";