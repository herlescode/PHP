<?php

declare(strict_types=1);

namespace Root\Html\Modelo;

class Diaria
{
    // public string $data;
    // public int $tempo;
    // public Diarista $diarista;
    // public Cliente $cliente;

    public function __construct(
        public string $data, 
        public int $tempo, 
        public Diarista $diarista, 
        public Cliente $cliente)
    {
        // $this->tempo = $tempo;
        // $this->data = $data;
        // $this->diarista = $diarista;
        // $this->cliente = $cliente;
    }
    /**
     * retorna a lista das diárias
     */

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