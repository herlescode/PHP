<?php


namespace Root\Html\Modelo;

class Cliente
{
    public $nomeCompl;

    public function __construct($nomeCompl)
    {
        $this->nomeCompl = $nomeCompl;
    }
}