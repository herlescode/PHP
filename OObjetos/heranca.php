<?php

class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
        echo "Pessoa criada!!! \n";
    }

    function __destruct() {
        echo "Pessoa diz: Adeus";
    }

    public function apresentar(){
        echo "{$this->nome}, {$this->idade} anos \n";
    }
}

class Usuario extends Pessoa {
    public $login;

    function __construct($nome, $idade, $login){
        parent::__construct($nome, $idade);
        $this->login = $login;
        echo "usuário criado \n";
    }

    function __destruct() {
        echo "Usuário destruido \n";
        parent::__destruct();
    }

    public function apresentar() {
        echo "@{$this->login}: ";
        parent::apresentar();
    }
}

$apresentaClass = new Usuario('Herles', 44, 'herles.pontual');
$apresentaClass->apresentar();
unset($apresentaClass);
