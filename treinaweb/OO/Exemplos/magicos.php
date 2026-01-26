<?php

require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../../vendor/autoload.php'; // Carrega a pasta vendor que você criou

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();



class Cliente
{
    private $nome;

    public function __construct($nome)
    {
        $this->nome = $nome;
        //echo "$nome <br>";
    }
    public function __toString() //chama domo string 'echo'
    {
        return 'Nome do cliente '. $this->nome;
    }
    public function __invoke() //chama como uma função '$ cli()'
    {
        return 'Chamou como uma função';
    }
}


$cli = new Cliente('elvis');
dump ($cli);
echo $cli();
echo "<br>" . $cli;