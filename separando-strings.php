<?php

//FUNÇÃO QUE SEPARA UMA STRING EM DUAS
$nomeCompleto = 'Mirielle Souza';

//A Função explode() divide uma string em um array a partir de um separador, no caso o " "
//A Função list() pega esse array e guarda cada valor seprado em uma variável
list($nome, $sobrenome) = explode( " ", $nomeCompleto);

//A Função list() pega esse array e guarda cada valor seprado em uma variável
$nome = mb_substr($nome, 0, 1) . ".";
$sobrenome = mb_substr($sobrenome, 0, 1) . ".";

echo $nome . " " . $sobrenome;