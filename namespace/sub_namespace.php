<?php

namespace App;

echo __NAMESPACE__ . "\n";
const constante = 123;

namespace App\Principal;
echo __NAMESPACE__ . "\n";
const constante = 345;

namespace App\Principal\Especifico;
echo __NAMESPACE__ . "\n";
const constante = 567;

echo constante . "\n";
echo constant('\\' . __NAMESPACE__ . '\constante') . "\n";
echo \App\constante . "\n"; //acessar a constante do App
echo \App\Principal\constante . "\n";
echo \App\Principal\Especifico\constante . "\n";
