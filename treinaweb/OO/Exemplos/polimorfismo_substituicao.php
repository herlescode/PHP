<?php

interface Saldo //conceito de polimorfismo
{
    public function depositar($valor);
    public function sacar($valor);
}

class Cliente implements Saldo
{
    private $saldo;

    public function depositar($valor)
    {
        $this->saldo = $this->saldo + ($valor * 1.1);
    }
    public function sacar($valor)
    {
        $this->saldo = $this->saldo - $valor;
    }
}

class Diarista implements Saldo
{
    private $saldo;

    public function depositar($valor)
    {
        $this->saldo = $this->saldo + $valor;
    }
    public function sacar($valor)
    {
        $this->saldo = $this->saldo - $valor;
    }
    
}

// function realizarAcaoDepositar(Cliente $pessoa, $valor)
// {
//     $pessoa->depositar($valor);
// }

function realizarAcaoDepositar(Saldo $pessoa, $valor)
{
    $pessoa->depositar($valor);
}

$clienteC = new Cliente;
$diaristaC = new Diarista;

realizarAcaoDepositar($clienteC, 1000);
realizarAcaoDepositar($diaristaC, 1000);

echo "<pre>";

var_dump($clienteC, $diaristaC);
// $clientesal = new Cliente;
// $clientesal->depositar(100);
// var_dump ($clientesal);

// echo "<br>";

// $clientesal->sacar(15);
// var_dump($clientesal);

echo "</pre>";