<?php

session_start();

print_r($_SESSION);
echo "\n";

if(!isset($_SESSION['nome'])) {
    $_SESSION['nome'] = 'Herles';
}

if(!isset($_SESSION['email'])) {
    $_SESSION['email'] = 'herlespp@gmail.com';
}

print_r($_SESSION);
?>

<p>
    <a href="/sessao/basico_sessao_alterar.php"> Alterar</a>
</p>