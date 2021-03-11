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

                $n = array(3, 5, 8, 2);
                print_r($n);
                printf("Esse vetor possui ".count($n)." posições.<br/>");

                $n[] = 7;
                print_r($n);
                printf("E agora ele possui ".count($n)." posições.<br/>");

            ?>
            <br/><a href="01-exercicio.html">Voltar</a>
        </div>
    </body>
</html>

<!--

-O método

-->