<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <title>Aula 6 - Exercício 02</title>
    </head>
    <body>
        <div>
            <?php
                $atual = $_GET["aa"];#Essa linha vai pegar o valor da variável pela URL
                echo "O ano atual é $atual e o ano anterior era ".--$atual./*IMPORTANTE*/" e o próximo ano será ".$atual+=2;
             ?>
        </div>
    </body>
</html>

//*IMPORTANTE!!! ESSE DECREMENTO IRÁ TIRAR PRIMEIRO PARA JÁ EXIBIR NA MESMA EXECUÇÃO.

