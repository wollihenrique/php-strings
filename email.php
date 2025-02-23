<?php 


//Mais explicação sobre essa função no arquivo Coracao.php 
function email(string $nome, int $anoNascimento): void
{

    $idade = 2024 - $anoNascimento;
    $conteudoEmail = <<< FIM
            Olá Sr(a).$nome
            Gsotaríamos de dizer que você... cê é especial
            cê não tem a vida programada
            mas cê tem capacidade p resolver qualquer problema
            você tem só $idade, comparado com a vida, isso não é nada 
            Vai além nego...
       FIM;

    echo $conteudoEmail;
};

//Ao colocar '' na palavra desejada para finalizar a string, podemos definir como ela será interpretada
//se será interpretada como "" ou da forma mis simples, somente o ''.
/*function email(string $nome, int $anoNascimento): void
{

    $idade = 2024 - $anoNascimento;
    $conteudoEmail = <<< 'FIM'
            conteúdo da String...
    FIM;

    echo $conteudoEmail;
};
*/

email('Wallace Hneirque', 2007);