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
                $nome = "Martins";
                echo "$nome com o espaçamento normal <br/>";
                $selecao = str_pad($nome, 30,".",STR_PAD_RIGHT);
                printf("Com espaçamento trabalhado no método Str_pad ficará $selecao assim");

            ?>
            <br/><a href="02-exercicio.html">Voltar</a>
        </div>
    </body>
</html>

<!--

-O método str_pad() irá espaçar uma String preenchendo os gap definidos com um caracter configurado
-STR_PAD_RIGHT - Preencherá após a String
-STR_PAD_LEFT - Preencherá antes da String
-STR_PAD_CENTER - Deixará a String centralizada e irá preencher em ambos os lados

-->