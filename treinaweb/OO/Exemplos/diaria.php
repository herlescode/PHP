<?php

class Atendimento
{
    public $data;
    private $tempo;
    protected $valor;

    public function definirTempo($tempo)
    {
        if ($tempo < 1){
            echo " seu tempo ' $tempo ' não pode ser menor que 1 <br>";
        }
        $this->tempo = $tempo;
        return;
    }
}

class Diaria extends Atendimento
{
    public function definirValor($valor)
    {
        $this->valor = $valor;
    } 
}

$at1 = new Atendimento;
$d1 = new Diaria;
$d1->definirValor(150);
echo '<br>';
$at1->definirTempo(0);
echo '<br>';
var_dump($d1);
echo '<br>';
var_dump($at1);