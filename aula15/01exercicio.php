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

                $a = isset($_GET["v"]) ? $_GET["v"] : 1;

                # &$x é uma variável com referência, assim qualquer mudança na variável original será efetivada dentro e fora das funções
                function teste(&$x){
                    $x+= 2;
                    echo "O valor de X é $x <br/>";
                }

                //$a = 3;
                teste($a);
                echo "O valor de A é $a";
            ?>
            <br/><a href="01-exercicio.html">Voltar</a>
        </div>
    </body>
</html>
