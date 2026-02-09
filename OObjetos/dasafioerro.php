<?php

// interface Template {
//     public function metodo1();
//     public function metodos2();
// }

// abstract class ClasseAbstrata implements Template {
//     public function metodo3() {
//         echo "Estou funcionando \n";
//     }
// }

// class Classe extends ClasseAbstrata {
//     public function metodo1() {
//         echo "M 1 ok \n";
//     }
//     public function metodos2(){
//         echo "M 2 ok \n";
//     }
//     function __construct($parametro) {

//     }
// }

// $exemplo = new Classe('teste ok');
// $exemplo->metodo3();

interface Template {
    public function metodo1();
    public function metodos2();
}

class ClasseAbstrata implements Template {
    public function metodo3() {
        echo "Estou funcionando \n";
    }
        public function metodo1() {
        echo "M 1 ok \n";
    }
    public function metodos2(){
        echo "M 2 ok \n";
    }
}

class Classe extends ClasseAbstrata {

    function __construct($parametro) {

    }
}

$exemplo = new Classe('teste ok');
$exemplo->metodo3();
$exemplo->metodos2();
