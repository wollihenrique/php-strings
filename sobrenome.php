<?php

$nome = 'Mirielle de Souza Silva';

//A função str_contains é uma função que verifica se em uma string contém determinado texto
$ehDaMinhaFamili = str_contains($nome,'Santos');

if ($ehDaMinhaFamili) {
    echo "$nome é da minha família" . PHP_EOL;
} else {
    echo "$nome não é da minha família" . PHP_EOL;
}