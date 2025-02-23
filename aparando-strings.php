<?php


//A Função usada para aparar strings a partir de um determinado caractere, como definido abaixo:
$csv = ',Wallace Henrique, 16,';

//Primeira e última
echo trim($csv, ',') . PHP_EOL;

//Primeira - Left
echo ltrim($csv, ',') . PHP_EOL;

//Última - Right
echo rtrim($csv, ',') . PHP_EOL;