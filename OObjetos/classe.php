<?php

class Cliente {
    // atributos

    public $nome = 'Herles';
    public $idade = 44;

    public function apresentar() {
        echo "Nome: {$this->nome} \n idade: {$this->idade} \n";
    }
}
$c1 = new Cliente();
$c1 -> apresentar();
$c2 = new Cliente();
$c2->nome = 'Marilha';
$c2->apresentar();
