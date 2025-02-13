<?php

$numeros = [1, 2, 3, 4, 5, 5, 6, 6, 7, 8, 9];

echo "Números: " . implode(", ", $numeros) . PHP_EOL;

$numeros = array_unique($numeros);

echo "Números sem duplicados: " . implode(", ", $numeros) . PHP_EOL;