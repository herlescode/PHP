<?php

abstract class Abstrata {
    public abstract function metodo1();
    abstract protected function metodo2($parametro);
}

abstract class FilhaAbstrata extends Abstrata {
    public function metodo1() {
        echo "Classe abstrata metodo1 \n";
    }

    abstract public function metodo3();
}

class Concreta extends FilhaAbstrata {
    public function metodo1(){
        echo "sobrescrevi metodo1 \n";
        parent::metodo1();
    }

    public function metodo2($parametro){
        echo "methodo 2  $parametro \n";
        //parent::metodo2($parametro);
    } 

    public function metodo3(){
        echo "implantado metodo 3 \n";
        $this->metodo2("interno \n");
        //parent::metodo3();

    }
}

$c = new Concreta();
$c->metodo1();
$c->metodo2('externo');
$c->metodo3();

echo "\n";
var_dump($c);

echo "\n";
var_dump($c instanceof Concreta);
var_dump($c instanceof FilhaAbstrata);
var_dump($c instanceof Abstrata);


echo "Fim \n";

