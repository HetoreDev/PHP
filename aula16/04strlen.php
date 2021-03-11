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

            $txt = "Curso em Vídeo";
            $tamanho = strlen($txt);

            echo "A variável '$txt' tem $tamanho caracteres";

            ?>
            <br/><a href="01-exercicio.html">Voltar</a>
        </div>
    </body>
</html>

<!--

O método strlen() irá contar a quantidade de caracteres de uma variável String, porém ele contará todos os espaços em branco antes, entre e depois da String

-->