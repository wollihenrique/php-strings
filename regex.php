<?php

//-------------------------------EXPRESSÕES REGULARES-------------------------------
//A Regex a gente pode guardar em uma variável ou escrever ela como uma string usando ''
$telefones = ['(44) 93070 - 0536', '(44) 98756-5263', '(11) 97456-6671'];
$regex = '/^(\([0-9]{2}\)) (9?[0-9]{4}-[0-9]{4})$/';

foreach ($telefones as $telefon) {
    //Fazendo a verificação de acorod com a expressão regular
    $telefoneValido = preg_match(
        $regex,
        $telefon,
        $verificacoes //se o 1º item do array bater com a verificação, ele será guardado nesse array
    );

    if ($telefoneValido) {
        echo 'Telefone Válido' . PHP_EOL;
    } else {
        echo 'Telefone Inválido' . PHP_EOL;
    }
    var_dump($verificacoes);

    //Substituindo com regex
    echo preg_replace(
        $regex,
        '(XX) \2',
        $telefon
    ) . PHP_EOL;
}
