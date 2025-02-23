<?php

$nome = 'Wallace Henrique';
$email = 'wallacekada@gmail.com';
$senha = 'áÉìôÃ';

//vou pegar uma substring de uma string
//--------variável, posiçao inicial, posição final
echo substr($email, 0, 11) . PHP_EOL;
echo substr($email, 12) . PHP_EOL;

//Quero buscar uma substring ATÉ o @
$email = 'Galês@gmail.com';
$posicoaDoArroba = strpos($email, '@');
echo substr($email, 0, $posicoaDoArroba) . PHP_EOL;
echo substr($email, $posicoaDoArroba + 1) . PHP_EOL;
echo PHP_EOL;

//verificando tamanho da string
if (mb_strlen($senha) < 8) {
    echo 'Senha Insegura' . PHP_EOL;
} else {
    echo 'Senha Segura' . PHP_EOL;
}

$usuario = substr($email, 0, $posicoaDoArroba);
//AMBAS ESTAS FORMAS CONTAM APENAS COM OS CARACTERES BÁSICOS
//transformando o case para upperCase
echo strtoupper($usuario) . PHP_EOL;
//transformando o case para lowCase
echo strtolower($usuario) . PHP_EOL;

//JÁ ESTAS CONTAM COM TODOS OS TIPOS DE CARACTERES
echo mb_strtoupper($usuario) . PHP_EOL; 
echo mb_strtolower($usuario) . PHP_EOL;

//Separando uma string em variáveis e array
list($nome, $sobrenome) = explode(' ', $nome);
echo 'Nome: ' . $nome . PHP_EOL;
echo 'Sobrenome: ' . $sobrenome . PHP_EOL;

$csv = 'Wallace Henrique,16,wallacekada@gmail.com';
var_dump(explode(',', $csv));

//Elimina uma parte da string
 $string = ' jane Doe';
$initial = substr($string, 2);
echo $initial;

//Pega parte de uma string
$string = ltrim($string, " ");
$initial = strtoupper(mb_substr($string, 0, 1));
var_dump($initial);
 