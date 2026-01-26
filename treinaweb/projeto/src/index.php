<?php

require_once('../../../vendor/autoload.php');

use Root\Html\Controlador\Diaria;


$diariaControlador = new Diaria;

$diariaControlador->listar();