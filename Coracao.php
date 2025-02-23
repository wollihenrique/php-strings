<?php

//Funçõ que pega o nome e o primeiro sobrenome de duas pessoas e retorna um coração com seus nomes abreviados
//A função mb_substr() é usada para extrair uma substring de uma string, permitindo especificar o índice inicial e o número de caracteres a serem extraídos
//A Função explode() divide uma string em um array a partir de um separador, no caso o " "
//A Função list() pega esse array e guarda cada valor seprado em uma variável
//Uma string multi-linha em PHP é uma sequência de caracteres que inclui caracteres de nova linha (\n). Ela permite que várias linhas de texto sejam combinadas em uma única string, facilitando a manipulação e exibição de texto formatado.
function Coracao(string $nome1, string $nome2): string
{
    list($nome, $sobrenome) = explode(" ", $nome1);
    $nome = mb_substr($nome, 0, 1) . ".";
    $sobrenome = mb_substr($sobrenome, 0, 1) . ".";
    $abreviacao1 = $nome . " " . $sobrenome;

    list($nome, $sobrenome) = explode(" ", $nome2);
    $nome = mb_substr($nome, 0, 1) . ".";
    $sobrenome = mb_substr($sobrenome, 0, 1) . ".";
    $abreviacao2 = $nome . " " . $sobrenome;

    $mensagem = <<<END
           ******         ******
         **      **     **      **
       **          ** **          **
     **              *              **
     **                             **
     **        $abreviacao1 + $abreviacao2       **
       **                         **
         **                     **
           **                 **
             **             **
               **         **
                 **     **
                    ***
                     *
    END;

    return $mensagem;
}

$cartaDeAmor = Coracao('Wallace Henrique', 'Mirielle Souza');
echo $cartaDeAmor;