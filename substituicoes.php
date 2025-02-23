<?php


//A função str_replace substitui um texto de dentro de uma string
$texto = "Texto com caralho e puta que pariu";
echo str_replace('caralho', '***', $texto) . PHP_EOL;

echo str_replace(
    ['caralho', 'puta que pariu'],
    '***',
     $texto
    ) . PHP_EOL;

echo str_replace(
    ['caralho', 'puta que pariu'],
    ['***'],
     $texto
    ) . PHP_EOL;

echo str_replace(
    ['caralho', 'puta que pariu'],
    ['c', 'p'],
    $texto
    ) . PHP_EOL;

//---------------------------------------------------
//Substitui somente caracteres
echo strtr($texto, 'puta', '***') . PHP_EOL;

//variação dessa mesma função mas que trabalha com strings
echo strtr($texto, ['caralho' => 'c', 'puta que pariu' => 'pqp']) . PHP_EOL;

