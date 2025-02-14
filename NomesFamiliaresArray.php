<?php

$nomesFamiliares = ["Lucas", "Dany", "Mateus", "Marcos"];

echo "Nomes familiares: " . implode(", ", $nomesFamiliares) . "\n" . PHP_EOL;

echo "Nomes familiares: " . PHP_EOL;
foreach ($nomesFamiliares as $nome){
    echo "Nome: $nome" . PHP_EOL;
}