<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <title>Aula 14 - Exercicio 02 - Funções com Return</title>
    </head>
    <body>
        <div>
            <?php

                $a = isset($_GET["v1"]) ? $_GET["v1"] : 1;
                $b = isset($_GET["v2"]) ? $_GET["v2"] : 1;

                function soma($a, $b){
                    return $a + $b;
                }

                $resultado = soma($a, $b);

                echo "A soma entre $a e $b é igual a $resultado";

            ?>
            <br/><a href="02-exercicio.html">Voltar</a>
        </div>
    </body>
</html>
