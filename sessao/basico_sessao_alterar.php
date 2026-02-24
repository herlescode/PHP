<?php

session_start();

print_r($_SESSION);

?>
<p>
    <b>Nome: </b><?= $_SESSION['nome'] ?>
<br>
    <b>Email: </b><?= $_SESSION['email'] ?>
</p>

<?php
$_SESSION['email'] = 'herlestop1@protonmail.com';
?>

<p>
    <a href="basico_sessao.php">Voltar</a>
    <br>
    <a href="basico_sessao_limpar.php">Limpar Sessao</a>
</p>