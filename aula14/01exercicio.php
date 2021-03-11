<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <title>Aula 14 - Exercicio 01 - Funções Void</title>
    </head>
    <body>
        <div>
            <?php

                $a = isset($_GET["v1"]) ? $_GET["v1"] : 1;
                $b = isset($_GET["v2"]) ? $_GET["v2"] : 1;

                function soma($a, $b){
                    $s = $a + $b;
                    echo "O resutaldo da soma de $a e $b é $s <br/>";
                }

                soma($a,$b);

            ?>
            <br/><a href="01-exercicio.html">Voltar</a>
        </div>
    </body>
</html>
