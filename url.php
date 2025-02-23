<?php

//A função str_starts_with() verifica se uma string começa com determinado texto
$url = 'https//alura.com.br';
if(str_starts_with($url, 'https')){
    echo 'É uma URL segura' . PHP_EOL;
} else {
    echo 'Não é uma URL segura' . PHP_EOL;
}

echo PHP_EOL;

//A função str_starts_with() verifica se uma string termina com determinado texto
if (str_ends_with($url, 'br')){
    echo 'É um domínio do Brasil';
} else {
    echo 'Não é um domínio do Brasil';
}
