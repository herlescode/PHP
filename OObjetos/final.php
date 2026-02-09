<?php

//final não pode ser subscrito

abstract class Abstrata {
    abstract public function metodo1();

    public final function metodo2(){
        echo "não posso ser subscrito";
    }
}

class Classe extends Abstrata {
    // public function metodo2() {
    //     //echo "eu vou tentar mudar seu conteúdo";
    // }

    public function metodo1() {
        echo "meu novo conteúdo";
    }
}

$classabs = new Classe();

$classabs->metodo1();
echo "\n";
$classabs->metodo2();
echo "\n";