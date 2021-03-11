<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <title>Aula 12 - Exercicio 01 - Estrutura Condicional While</title>
    </head>
    <body>
        <div>
            <?php

            $c = 1;

            do{
                echo "$c ";
                $c+=1;
            }while($c <= 10);

            echo "<br/>";

            $c = 10;

            do{
                echo "$c ";
                $c-=1;
            }while($c >= 1);

            ?>
        </div>
    </body>
</html>
