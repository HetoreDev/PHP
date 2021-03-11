<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <title>Aula 12 - Exercicio 02 - Estrutura Condicional While</title>
    </head>
    <body>
        <div>
            <?php

                $numero = isset($_GET["fat"]) ? $_GET["fat"] : 1;

                $fatorial = 1;

                do{
                    echo " $fatorial ";

                    $fatorial*=$numero;
                    $numero--;

                }while($numero >= 1);
            ?>

            <br/><br/><a href="02-exercicio.html">Voltar</a>
        </div>
    </body>
</html>
