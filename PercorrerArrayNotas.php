<?php

$notas = [9, 3, 10, 5, 10, 8.5, 9, 10, 8, 7, 6.5, 5, 4.8];

$quantidadeNotas = count($notas);

echo "Quantidade de notas no array: $quantidadeNotas" . PHP_EOL;

foreach ($notas as $nota){
    echo "Nota: $nota" . PHP_EOL;
}