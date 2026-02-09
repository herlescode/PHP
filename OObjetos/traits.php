<?php

trait validacao {
    public $a = "teste";
    private $c = "Valor c";

    public function validarString($str){
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor {
    public $b = "teste1";

    public function validarStringMelhor($str){
        return isset($str) && trim($str);
    }
}
class Usuario {

    use validacao, validacaoMelhor;
    public function imprimirValorC() {
        echo "\n" . $this->c;
    }
}

$usuario  = new Usuario();
var_dump($usuario->validarString( null ));
echo "\n";
var_dump($usuario->validarStringMelhor( "0" ));
echo "\n";
echo $usuario->b;
echo "\n";
echo $usuario->imprimirValorC(); 
echo "\n";