<?php

class Pessoa {
    public $nome;
    public $idade;


    function __construct($nome, $idade) {
        echo "contrutor ativo \n";
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct() {
        echo "MORREEEEUUUUUU \n";
    }

    public function __toString() {
        return "{$this->nome} tem {$this->idade} anos";
    }
    
    public function apresentar(){
        echo $this . "\n";
    }
    //quando não for declarado o atributo $atrib o get é chamado /Ele é chamado ao tentar LER um atributo que não existe ou é privado
    public function __get($atrib) {
        echo "Atributo não declarado {$atrib} \n";
        return 'Marcela' . "\n";
    }
    //é chamado quando tento alterar um atributo que não exite / Ele é chamado ao tentar GRAVAR (definir valor) em um atributo que não existe
    public function __set($atrib, $valor) {
        echo "alterando atributo não declarado {$atrib} / {$valor} \n";
    }
    //metodo __call é chamado quando não existe o metodo / Ele intercepta chamadas de funções que a classe não tem
    public function __call($metodo, $params) {
        echo "tentando executar metodo {$metodo} ";
        //echo "com os paramtros";
        print_r($params);
    }
}

$pessoa = new Pessoa('Herles', 44); //construtor é chamado 
//chamando o __toString
 $pessoa->apresentar();
// //faz a mesma coisa chama tostring
 echo "{$pessoa} \n";
//alterando o valor de $nome e chama tostring
 $pessoa->nome = 'Jaqueline';
 $pessoa->apresentar();

//acessando metodo __get pois o atributo não existe
 echo $pessoa->nomeCompleto;
//chamando o __set por que o parametro não existe
 $pessoa->nomeCompleto = "top d+ \n";

//chamado metodo mágico __call (função que não existe)
$pessoa->exec(1, "texto", true, [1,2,3]);