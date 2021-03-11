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
                $frase = "Gosto de estudar Matemática!!!";
                printf("A frase original era -> $frase <br/>");
                $novaFrase = str_replace("Matemática","PHP",$frase);
                printf("Com o método Str_replace ficará -> $novaFrase");
            ?>
            <br/><a href="02-exercicio.html">Voltar</a>
        </div>
    </body>
</html>

<!--

-O método

-->