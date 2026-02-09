<?php

class A {
    
    public $publico = 'Publico';
    private $private = 'Private';
    protected $protected = 'Protected';

    public function acessar (){
        echo "Classe A Publico = {$this->publico} \n";
        echo "Classe A Private = {$this->private} \n";
        echo "Classe A Protected = {$this->protected} \n";
    }

    private function naoMostra(){
        echo 'não mostro e pronto';
    }

    protected function porHeranca(){
        echo 'me amostro por herança';
    }
}

class B extends A {

    public function mostrarTudo() {

        echo "class B Público {$this->publico} \n";
        echo "class B Protegido {$this->protected} \n";
        echo "class B Private1 {$this->private} \n";
    } 
}

$mostrarB = new B();
$mostrarB->mostrarTudo();