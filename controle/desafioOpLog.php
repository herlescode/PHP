<form action="#" method="post">
    <div>
        <label for="t1"> Trabalho 1 terça:</label>
        <select name="t1" id="t1">
            <option value="1" <?= (isset($_POST['t1']) && $_POST['t1'] == '1') ? 'selected' : '' ?>> Executado</option>
            <option value="0" <?= (isset($_POST['t1']) && $_POST['t1'] == '0') ? 'selected' : '' ?>> Não Execute</option>
        </select>
    </div>
    <div>
        <label for="t2"> Trabalho 2 Quinta:</label>
        <select name="t2" id="t2">
            <option value="1" <?= (isset($_POST['t2']) && $_POST['t2'] == '1') ? 'selected' : '' ?>> Executado</option>
            <option value="0" <?= (isset($_POST['t2']) && $_POST['t2'] == '0') ? 'selected' : '' ?>> Não Execute</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<?php

if (isset($_POST['t1']) && isset($_POST['t2'])){ //isset garante que ele somente rode depois de selecionar as opções

    $trabalho1 = $_POST['t1'];
    echo "<br>";
    $trabalho2 = $_POST['t2'];

    if ($trabalho1 == 1 and $trabalho2 == 1 ){
        echo "vamos comprar uma tv de 50 e tomar sorvete";
    } elseif ($trabalho1 == 1 and $trabalho2 == 0){
        echo "vamos comprar uma tv de 32 e não vamos tomar sorvete";
    } elseif ($trabalho1 == 0 and $trabalho2 == 1){
        echo "vamos comprar uma tv de 32 e não vamos tomar sorvete";
    } else {
        echo "vamos ficar em casa"; 
    }
}
?>
