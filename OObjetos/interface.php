<?php

interface Aninal {
    function respirar();

 }
 interface Canino {
    function latir():string;
 }
 interface Felino {
    function correr();
 }

class Cachorro implements Aninal, Canino, Felino {
    function respirar() {
        echo "irei usar oxigênio! \n";
    }
    function latir(): string {
        return 'Eu sou brabo';
    }
    function correr() {
        return 'vrummmm ';
    }
}

$animal1 = new Cachorro();
$animal1->respirar();
echo $animal1->latir() . "\n";

echo "Fim de tudo \n";
var_dump($animal1 instanceof Felino);