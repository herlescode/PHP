
<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">km-milha</option>
        <option value="milha-km">milha-km</option>
        <option value="metro-km">metro-km</option>
        <option value="km-metro">km-metro</option>
        <option value="fahren-celsius">fahren-celsius</option>
        <option value="celsius-fahren">celsius-fahren</option>
    </select>
    <button>Calcular</button>
</form>

<?php

$selconvercao = $_POST['conversao'] ?? null;

$valor = $_POST['param'] ?? 0;
$soma = "";
 echo "$selconvercao <br>";

switch ($selconvercao){
    case 'km-milha':
        $soma = $valor * 0.621;
        break;
    case 'milha-km': 
        $soma = $valor / 0.621;
        break;
    case 'metro-km':
        $soma = $valor / 1000;
        break;
    case 'km-metro':
        $soma = $valor * 1000;
        break;
    case 'fahren-celsius':
        $soma = ($valor - 32) /1.8;
        break;
    case 'celsius-fahren':
        $soma = ($valor * 1.8) + 32;
        break;
}
echo "$soma";




