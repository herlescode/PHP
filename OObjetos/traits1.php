<?php

trait validacao {
    public function validarString() {
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor {
    public function validarString() {
        return isset($str) && trim($str);
    }
}

class Usuario {
    use validacao, validacaoMelhor {
    //resolver o conflito
    validacaoMelhor::validarString insteadOf validacao;

    validacao::validarString as validarSimples;
    }
}

$usuario = new Usuario();
var_dump($usuario->validarString(''));
echo "\n";
var_dump($usuario->validarSimples(' '));