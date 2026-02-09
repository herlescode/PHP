<?php

function dectipos(int $a, float $b)
{
    echo "somando $a + $b = ";
    return $a + $b;
}

// echo dectipos(2, 5.5) . "\n";


function resutadotipos($a, $b): int {
    echo "somando $a + $b = ";
    return $a + $b;
}

echo resutadotipos(5, 3.5) . "\n";