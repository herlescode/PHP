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

echo "<pre>";
$clientesal = new Cliente;
$clientesal->depositar(100);
var_dump ($clientesal);

echo "<br>";

$clientesal->sacar(15);
var_dump($clientesal);

echo "</pre>";