<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <title>Aula 14 - Exercicio 01 - Funções com Referência</title>
    </head>
    <body>
        <div>
            <?php

                $frase = "Eu vou estudar PHP";
                $contador = str_word_count($frase, 0);

                echo "A frase '$frase' possui $contador palavras"."<br/>";
            ?>
            <br/><a href="01-exercicio.html">Voltar</a>
        </div>
    </body>
</html>

<!--

-O método str_word_count(String, 0) conta quantas palavras existem dentro de um variável do tipo String e retorna em inteiro a quantidade
-str_word_count(String, 1) vai criar um vetor onde será armazenado cada palavra da String
-str_word_count(String, 2) vai criar um vetor onde será armazenado em qual caracter começa cada palavra da String

-->