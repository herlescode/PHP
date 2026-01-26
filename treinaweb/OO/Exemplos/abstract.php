<?php
//header('Content-Type: text/plain');
require __DIR__ . '/../../vendor/autoload.php';


// ==========================================================
// 1. ATIVANDO O MODO "ERRO BONITO"
// ==========================================================
require __DIR__ . '/../../vendor/autoload.php'; // Carrega a pasta vendor que você criou

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();



//meu codigo 

abstract class Atendimento
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

//$at1 = new Atendimento;
$d1 = new Diaria;
$d1->definirValor(150);
echo '<br>';
$d1->data = "01/05/2026";
// $at1->definirTempo(0);
echo "<pre>";
echo '<br>';
dump($d1);
print ("teste tudo");
// echo '<br>';
echo "</pre>";
// var_dump($at1);