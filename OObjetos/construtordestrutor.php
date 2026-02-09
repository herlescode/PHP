<?php

class Pessoa {
    public $nomeC;
    public $idade;

    function __construct ($nome, $idade = 44) {
        $this->nomeC = $nome;
        $this->idade = $idade; 
    }

    function __destruct() {
        echo "e morreu";
    }

    public function chamaTudo() {
        echo "{$this->nomeC}, {$this->idade} anos \n";
    }
}
$instPessoa = new Pessoa('Herles', 44);
$instPessoa->chamaTudo();

