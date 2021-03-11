<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <title>Contador de Caracteres de um Nome</title>
    </head>
    <body>
        <div>
            <?php

            $quantidade = 0;

            $x = isset($_GET["name"]) ? $_GET["name"] : "Sem nome";

            $y = trim($x); # Elimina os eventuais espaços em branco antes e depois da String
            $vetor = str_word_count($y,1); # Armazena em um vetor cada palavra da String sem os espaços
            $indices = count($vetor); # Verifica a quantidade de índices que existem no Vetor

            for($i=0; $i<$indices; $i++){

                $quantidade += strlen($vetor[$i]);

            }

            echo "O nome '$y' contém $quantidade caracteres."."<br/>";

            ?>
            <br/><a href="main.html">Voltar</a>
        </div>
    </body>
</html>

<!--

Algoritmo para contar a quantidade de caracteres de uma variável do tipo String, ignorando os espaços entres as palavras

-->