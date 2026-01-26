<?php

namespace Root\Html\Modelo;

class Diaria
{
    public $data;

    public $tempo;

    public Diarista $diarista;

    public Cliente $cliente;

    public function __construct($data, $tempo, Diarista $diarista, Cliente $cliente)
    {
        $this->tempo = $tempo;
        $this->data = $data;
        $this->diarista = $diarista;
        $this->cliente = $cliente;
    }

    static public function obterTodas()
    {
        return [
            new self(
                "20/02/2026",
                12,
                new Diarista("Bezerra"),
                new Cliente("Maria")

            ),
              new self(
                "24/02/2026",
                9,
                new Diarista("Pedro"),
                new Cliente("Elvis")

            ),
              new self(
                "20/03/2026",
                8,
                new Diarista("Lu"),
                new Cliente("Samara")

            ),
        ];
    }
 
}