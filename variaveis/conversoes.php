<?php

echo is_int(PHP_INT_MAX);
echo "\n";
echo var_dump(PHP_INT_MAX + 1);

echo "\n";

echo var_dump((intval(2.9999)));
echo "\n";
echo var_dump((int)round(2.8));
echo"\n";
var_dump(3 + "2");