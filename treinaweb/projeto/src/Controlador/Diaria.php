<?php

namespace Root\Html\Controlador;
use Root\Html\Modelo\Diaria as ModeloDiaria;

require_once('../../../vendor/autoload.php');

class Diaria
{
    public function listar()
    {
        $diarias = ModeloDiaria::obterTodas(); //:: é pq tem um metodo statico
        //dump($diarias);
        require_once(__DIR__ . '/../../../visualizacao/listar_diarias.php'); //__DIR__ fornece o valor absoluto
    }
}