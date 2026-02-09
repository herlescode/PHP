<?php

declare(strict_types=1);

namespace Root\Html\Modelo;

class Cliente
{
    // public string $nomeCompl;

    public function __construct(public string $nomeCompl) //está presente no php somente no construtor adiciono o public
    
    {
        // $this->nomeCompl = $nomeCompl;
    }
}