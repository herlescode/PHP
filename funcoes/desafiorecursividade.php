<?php

$dados = [1, 2, [3, [7, [8,[11], 9]], 4, 5], 6]; //, [7, [8, 9]], 10

function lerLista($lista, $seta = ">")
{
    foreach($lista as $item){
        if(is_array($item)) {
            lerLista($item, $seta . ">");
        } else {
            echo "$seta $item \n";
        }
    }
}
lerLista($dados);