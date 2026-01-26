<?php

class Pessoa
{
    public $nome;
    public $telefone;
    public $endereco;

    //.....
}

class Cliente extends Pessoa
{
    public $saldo;

    public function contratarDiarista($diarista)
    {
        //....
    }
}

class Diarista extends Pessoa
{
    //public chavePix;


    /**
     * Atende ao cliente 
     * @param string $nomeCliente
     *
     */

    public function cliente($nomeCliente)
    {
        $nomeD = $this->nome;
        echo "A diarista $nomeD atendeu ao cliente $nomeCliente <br>";
    }
    /**
     * @param int $nota
     * @param string $nomeCliente
     */

    public function avaliarCliente($nomeCliente, $nota)
    {
        $this->cliente($nomeCliente);
        echo "avaliou o cliente com a nota $nota <br>";
    }
}
$maria = new Diarista;
$maria->nome = "Maria de Jesus";
$maria->telefone = "(61)9 8585 2023 <br>";
$maria->endereco = "Qnp 10 Conjunto V <br>";
$maria->avaliarCliente('Jon Poul', 6);

var_dump($maria);